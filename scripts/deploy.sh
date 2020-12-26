#!/bin/bash

npm run compile:css
rsync -avr --exclude='.DS_Store' --exclude='.DS_Store' --exclude='.stylelintrc.json' --exclude='.eslintrc' --exclude='.git' --exclude='.gitattributes' --exclude='.github' --exclude='.gitignore' --exclude='README.md' --exclude='composer.json' --exclude='composer.lock' --exclude='node_modules' --exclude='vendor' --exclude='package-lock.json' --exclude='package.json' --exclude='.travis.yml' --exclude='phpcs.xml.dist' --exclude='sass' --exclude='.idea' ./ ./deploy
scp -r ./deploy/* bitnami@3.126.249.65:/home/bitnami/apps/wordpress/htdocs/wp-content/themes/s