#########################################################################
# gateway-nginx
#########################################################################

FROM nginx:1.17.8-alpine as phraseanet-doc-nginx

#########################################################################
# This image contains the documentation builded in sphinx server
#########################################################################

FROM ubuntu:20.04 as phraseanet-doc-builder
ENV PYTHON_VERSION=3.8.2
ENV PYTHON_PIP_VERSION=20.0.2
RUN apt-get update \
    && apt install -y --no-install-recommends \
       ca-certificates \
       netbase \
       software-properties-common \
       graphviz \
       imagemagick \
       make \
       wget \
       pip \
    && python3 -m pip install -U pip \
    && python3 -m pip install Sphinx==2.4.4 Pillow \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y \
    php7.1-cli

WORKDIR /docs
COPY . .
CMD ["make", "html"]