# MakeFile for building all the docs at once.
# Inspired by the Makefile used by bazaar. 
# http://bazaar.launchpad.net/~bzr-pqm/bzr/2.3/
#
# All credits for this multilingual builder to the CakePHP Team
# see https://github.com/cakephp/docs

PYTHON = python

.PHONY: all clean html latexpdf epub htmlhelp website website-dirs

# Languages that can be built.
LANGS = fr en
DEST = website

# Dependencies to perform before running other builds.
# Clone the en/Makefile everywhere.
SPHINX_DEPENDENCIES = $(foreach lang, $(LANGS), $(lang)/Makefile)

# Copy-paste the french Makefile everwhere its needed.
%/Makefile: fr/Makefile
	cp $< $@

#
# The various formats the documentation can be created in.
# 
# Loop over the possible languages and call other build targets.
#
html: $(foreach lang, $(LANGS), html-$(lang))
	cp -f _templates/index.php	_build/html/index.php
	cp -Rf _templates/lib	_build/lib
htmlhelp: $(foreach lang, $(LANGS), htmlhelp-$(lang))
epub: $(foreach lang, $(LANGS), epub-$(lang))
htmlhelp: $(foreach lang, $(LANGS), htmlhelp-$(lang))

# Make the HTML version of the documentation with correctly nested language folders.
html-%: $(SPHINX_DEPENDENCIES)
	cd $* && make html LANG=$*

htmlhelp-%: $(SPHINX_DEPENDENCIES)
	cd $* && make htmlhelp LANG=$*

epub-%: $(SPHINX_DEPENDENCIES)
	cd $* && make epub LANG=$*

latexpdf-%: $(SPHINX_DEPENDENCIES)
	cd $* && make latexpdf LANG=$*

website-dirs:
	# Make the directory if its not there already.
	[ ! -d $(DEST) ] && mkdir $(DEST) || true

	# Make the downloads directory
	[ ! -d $(DEST)/_downloads ] && mkdir $(DEST)/_downloads || true

	# Make downloads for each language
	$(foreach lang, $(LANGS), [ ! -d $(DEST)/_downloads/$(lang) ] && mkdir $(DEST)/_downloads/$(lang) || true;)

website: website-dirs html epub
	# Move HTML
	$(foreach lang, $(LANGS), cp -r build/html/$(lang) $(DEST)/$(lang);)
	
	# Move EPUB files
	$(foreach lang, $(LANGS), cp -r build/epub/$(lang)/*.epub $(DEST)/_downloads/$(lang);)

clean:
	rm -rf _build/*

clean-website:
	rm -rf $(DEST)/*
