# ReadyMage Logger

Magento 2 module for a purpose of mirroring all logs and errors emitted by Magento default logger to stdErr. 
This is more convenient for centralized logging systems in dockerized environments.

Add to any Magento 2 project with following commands:

  ```shell
  composer require readymage/logger --no-interaction --update-no-dev --prefer-dist
  php bin/magento module:enable ReadyMage_Logger
  ```
