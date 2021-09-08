#!/bin/bash

# Files to copy from Phraseanet github repository
GITHUB_FILE_LIST=(
    "/lib/conf.d/configuration.yml" \
  )

# Destination where to copy source files
DESTINATION_DIRECTORY="./common/github_source"

# Path to reference version file
VERSION_INC_FILE_PATH="./__version__.inc"

#######################################
# Display title in terminal
# Arguments:
#   title (string)
# Returns:
#   console displaying title
#######################################
display_title()
{
  local title
  local lenTitle
  local hyphen

  title=" $1 "
  lenTitle=${#title}
  hyphen=$(printf "%-${lenTitle}s" "─")

  echo "┌─${hyphen// /─}─┐"
  echo "│$title│"
  echo "└─${hyphen// /─}─┘"
}

#######################################
# Colorize output
# Arguments:
#   $1 (string)
#######################################
colorize()
{
    echo -e "\e[33m$1\e[0m"
}

#######################################
# Return Github repository tag list
# Arguments:
#   variable name will contain result
#   repo name (e.g. 'alchemy-fr/Phraseanet')
# Usage:
#   getGithubTagsList tagList 'alchemy-fr/Phraseanet'
#   printf '%s\n' "${tagList[@]}"
#######################################
getGithubTagsList()
{
  # Namespaced variable name to avoid collision
  local getGithubTagsList_returnValue=$1
  local getGithubTagsList_repoName=$2
  local getGithubTagsList_tagList

  getGithubTagsList_tagList=$(wget -q https://api.github.com/repos/$getGithubTagsList_repoName/tags -O - | grep '"name": "' | sed 's/\s*"name": "//g' | sed 's/",//g')

  local IFS=$'\n'

  mapfile -t "$getGithubTagsList_returnValue" < <( \
    echo "${getGithubTagsList_tagList[*]}" )
}

#######################################
# Return semver result comparison :
#   - 0 : semver1 = semver2
#   - 1 : semver1 > semver2
#   - 2 : semver1 < semver2
# Arguments:
#   semver1 (string)
#   semver2 (string)
#######################################
semver_comp ()
{
    if [[ $1 == $2 ]]
    then
        return 0
    fi
    local IFS=.
    local i ver1=($1) ver2=($2)
    # fill empty fields in ver1 with zeros
    for ((i=${#ver1[@]}; i<${#ver2[@]}; i++))
    do
        ver1[i]=0
    done
    for ((i=0; i<${#ver1[@]}; i++))
    do
        if [[ -z ${ver2[i]} ]]
        then
            # fill empty fields in ver2 with zeros
            ver2[i]=0
        fi
        if ((10#${ver1[i]} > 10#${ver2[i]}))
        then
            return 1
        fi
        if ((10#${ver1[i]} < 10#${ver2[i]}))
        then
            return 2
        fi
    done
    return 0
}

#######################################
# Return last patched version
# Arguments:
#   targetVersion (string) (e.g. "4.1")
#   versionList (array)
# Return example : 4.1.3
#######################################
getLastPatchFromVersion()
{
  local targetVersion=$1;
  shift;

  declare -A tagMap     # Create an associative array
  local listEntries
  listEntries=("$@")

    for i in "${listEntries[@]}";
      do
          semver=$(echo "$i" | egrep -o '[0-9]+\.[0-9]+\.[0-9][0-9]*')
          key=$(echo "$i" | egrep -o '[0-9]+\.[0-9]')

          if [[ ${tagMap[$key]+_} ]];
          then
                semver_comp ${semver} "${tagMap[$key]}"
                if [[ $? == "1" ]]; then
                  tagMap[$key]=${semver}
                fi
          else
            tagMap[$key]=$semver
          fi
      done

  for versionFounded in "${!tagMap[@]}";
  do
    if [[ "$versionFounded" == "$targetVersion" ]]; then
       echo "${tagMap[$versionFounded]}"
    fi

  done
}

#######################################
# Display all last patch for each version X.X
# Example :
#   4.0 -> 4.0.12
#   4.1 -> 4.1.3
#   3.1 -> 3.1.10
#   3.8 -> 3.8.8
#######################################
showAllLastPatch()
{
  declare -A tagMap
  local listEntries
  listEntries=("$@")

  for i in "${listEntries[@]}";
  do
      semver=$(echo "$i" | egrep -o '[0-9]+\.[0-9]+\.[0-9][0-9]*')
      key=$(echo "$i" | egrep -o '[0-9]+\.[0-9]')

      if [[ ${tagMap[$key]+_} ]];
      then
            semver_comp ${semver} "${tagMap[$key]}"
            if [[ $? == "1" ]]; then
              tagMap[$key]=${semver}
            fi
      else
        tagMap[$key]=$semver
      fi

  done

  echo 'All last minor version :'

  for K in "${!tagMap[@]}";
  do
    echo "$K -> "${tagMap[$K]};
  done
}


#######################################
# Return current version from
# $VERSION_INC_FILE_PATH file
#######################################
get_current_version()
{
    local currentVersion

    if [[ -e $VERSION_INC_FILE_PATH ]]; then
        currentVersion=$(sed -n -e '/'"CURRENT_VERSION"'/ s/.*\= *//p' "$VERSION_INC_FILE_PATH")
    fi

    echo "$currentVersion"
}

#######################################
# Download list files to dedicated directory
# Arguments:
#   lastVersionPatched (string) (e.g. "4.1.3")
#   destinationDirectory (string)
#   githubFileList (array)
#######################################
copySourceFiles()
{
    local lastVersionPatched=$1;
    shift;

    local destinationDirectory=$1;
    shift;

    local githubFileList=$1;
    githubFileList=("$@")

    local githubPath
    local localDir
    local localPathFile
    local tmpFile

    if [[ ! -d "$destinationDirectory" ]]; then
        mkdir -p "$destinationDirectory"
    fi


    if [[ ! -d "$destinationDirectory" ]]; then
        echo "error Can't create directory $destinationDirectory"
        exit
    fi

    for i in "${githubFileList[@]}";
    do
        echo
        githubPath="https://raw.githubusercontent.com/alchemy-fr/Phraseanet/$lastVersionPatched$i"

        tmpFile=$(mktemp)

        echo -e "download source... ("$(colorize "$githubPath")")"

        wget -o "logfile" "$githubPath" -O "$tmpFile"

        if [[ $? -ne 0 ]]
        then
            # wget fail, display log
            cat "logfile"
        else
            localDir="$destinationDirectory"$(dirname "${i}")
            localPathFile="$destinationDirectory$i"
            echo "to: "$(colorize "$localPathFile")
            if [[ ! -d "$localDir" ]]; then
                mkdir -p "$localDir"
            fi
            mv "$tmpFile" "$localPathFile"
        fi

        rm "logfile"
    done
}


#######################################
# Entrypoint
#######################################
start()
{
    local currentVersion
    local lastVersionPatchNumber
    local tagList

    echo
    display_title "Include Phraseanet Sources | Start"

    currentVersion=$(get_current_version)
    echo -e "Target Phraseanet version : "$(colorize "$currentVersion")


    getGithubTagsList tagList 'alchemy-fr/Phraseanet'

    #showAllLastPatch "${tagList[@]}"

    lastVersionPatchNumber=$(getLastPatchFromVersion "$currentVersion" "${tagList[@]}")

    if [[ -z "$lastVersionPatchNumber" ]]; then
        echo "No last version patch number found... Exit."
    else
        echo "Last version patch number : "$(colorize "$lastVersionPatchNumber")
        copySourceFiles "$lastVersionPatchNumber" "$DESTINATION_DIRECTORY" "${GITHUB_FILE_LIST[@]}"
    fi

    display_title "Include Phraseanet Sources | End"
    echo
}

start
