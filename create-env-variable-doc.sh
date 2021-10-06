#!/bin/bash
# note : php >= 7.1
# Comment php command line below if you want to test a local text file
php7.3 bundle_createEnvVariableDoc/createEnvVariableDoc.php

# Uncomment php command line below if you want to test a local text file
# See result in http://localhost:4041/en/Admin/EnvironnementVariables.html
#php7.3 bundle_createEnvVariableDoc/createEnvVariableDoc.php bundle_createEnvVariableDoc/test/.envTest1.txt