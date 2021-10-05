# Environement variable documentation generator

## Introduction

Goal of *Environement variable documentation generator* is
- Download last minor version of `/.env` text file.
- Parse and generate an html file which will be integrated in sphinx documentation.

## Local test

See `create-env-variable-doc.sh` script file to override `/.env` 
Github file with any local text file.
Build/up stack (`dc build && dc up -d`) to see result and
http://localhost:4041/en/Admin/EnvironnementVariables.html

An text file example is provided in `bundle_createEnvVariableDoc/test/.envTest1.txt`

## Parsing patterns

### Title

All comment lines that start with and end with a minimum of 3 hyphens ("`-`")
character generate a title.

Example :

```
# --- Lorem ipsum ---
``` 
```
# ------------------ Lorem ipsum ------------------
```

### Link

Pattern: `[title|url]`

```
# Lorem [PHP documentation|https://www.php.net/manual/en] ipsum
```


### Unordered list
Example:

```
# - Unos
# - Dos
# - Tres
#
```
> Note that unordered list **MUST** finished with a line starting with a sharp 
> character ("`#`").

Long sentences over several lines are supported. Example:

```
# - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
#   et quam dui. Donec urna dui, lacinia tincidunt erat ut,
#   ultrices vestibulum diam. 
# - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
# et quam dui. Donec urna dui, lacinia tincidunt erat ut,
# ultrices vestibulum diam. 
# - Lorem ipsum
#
```
> Note also that a space character is required between hypen "`-`" and 
> first item character. Example below **WILL NOT** be transformed to unordered list:
> ```
> # To setup unlimited memory set parameter to:
> # -1
> ```

### Breaking lines

All environment variable comment (or section comment) lines finished by "`.`", "`:`" or "`...`" generate a breaking line.

Example :

```
# lorem ipsum.
# lorem ipsum:
# lorem ipsum...
``` 
> Note that "breaking lines" pattern also works in unordered list :
> 
> ```
> # - Lorem ipsum
> # - Praesent quis dignissim nisl.
> # Etiam ac mi sed risus egestas lobortis.
> # - Lorem ipsum
> #
> ``` 

### Environment variable flags line
Flags are optionnal. They **MUST** be contigous to environment variable definition. Example: 
```
# @run
PARAMETER=VALUE
``` 
- Docker spécific flags are `@install`, `@build` or `@run`.
- Deprecated flag is `@deprecated`

Example:
```
# @run @deprecated
PARAMETER_1=VALUE
# @deprecated @install
PARAMETER_2=VALUE
``` 

### Environment variable comments lines

Comments lines are optionnal. They **MUST** be contigous to flags line (if 
exists) or environment variable definition. Example: 
```
# This is a comment for PARAMETER_1
PARAMETER_1=VALUE
# This is a comment for PARAMETER_2
# @build
PARAMETER_2=VALUE

# A linefeed is insered before this comment for more readability.
# @install
PARAMETER_3=VALUE

# See below an ordered list (note that unordered list MUST finished
# with a line starting with a sharp character ("#"):
# - Lorem ipsum dolor sit amet, consectetur adipiscing elit.
#   Phasellus et quam dui. Donec urna dui, lacinia tincidunt erat ut
# - Curabitur eu arcu id magna vulputate porttitor. Suspendisse potenti.
#
# @install
PARAMETER_4=VALUE
``` 

### <a name="section">Section

We define a section by a set of title, comment or unordered list that are **NOT**
contiguous to :
- an environment variable definition.
- (or) an environment variable flags line.
- (or) an environment variable comments lines.

A section **MUST** finished with an empty line ("LineFeed" character):

```
# I'm a new section

PARAMETER=VALUE
``` 

For edition convenience, the sections support empty lines (LineFeed) 
inside themselves:
```
# --------- Section A ---------

# The section A is so beautifull.

# Let see an unordered list of the section A:
# - Item 1 of section A
# - Item 2 of section A
#

# This is a comment for PARAMETER_1
# @build
PARAMETER_1=VALUE
``` 

But readability seems better with this example below:

```
# --------- Section A ---------
#
# The section A is so beautifull.
#
# Let see an unordered list of the section A:
# - Item 1 of section A
# - Item 2 of section A
#

# This is a comment for PARAMETER_1
# @build
PARAMETER_1=VALUE
``` 

### Specials comments 

These comments are bypassed by documentation generator process : 
they only exist for the .env text file.

- These comments **MUST** start with a minimum of 3 sharp character ("#")
- These comments **MUST** finished with an empty line ("LineFeed" character).

Example :

```
###
# Environment variables are assigned at different times in docker.
# 3 tags make it possible to distinguish them :
#
# - @install
# - @build
# - @run
#
# The "@deprecated" tag targets a deprecated variable.
#
# For better readability, see url below :
# https://docs.phraseanet.com/4.1/en/EnvironnementVariables.html

# ------------------ Lorem ipsum ------------------
```

