#########################################################################
# This image contains the documentation builded in sphinx server
#########################################################################
FROM php:7.1-cli
FROM sphinxdoc/sphinx:2.4.4 as phraseanet-doc-sphinx
COPY  . .
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    wget

#########################################################################
# gateway-nginx
#########################################################################

FROM nginx:1.17.8-alpine as phraseanet-doc-nginx
