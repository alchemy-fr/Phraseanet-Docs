#########################################################################
# This image contains the documentation builded in sphinx server
#########################################################################
from sphinxdoc/sphinx:2.4.4 as phraseanet-doc-sphinx
COPY  . .


#########################################################################
# gateway-nginx
#########################################################################

FROM nginx:1.17.8-alpine as phraseanet-doc-nginx
