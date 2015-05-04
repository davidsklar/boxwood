include_directories(
  ./
  ../hhvm/hphp/runtime/ext_zend_compat/php-src
  ../hhvm/hphp/runtime/ext_zend_compat/php-src/Zend/
  ../hhvm/hphp/runtime/ext_zend_compat/php-src/TSRM/
  ../hhvm/hphp/runtime/ext_zend_compat/php-src/main/
)

HHVM_EXTENSION(boxwood     boxwood.cpp case-fold.cpp case-fold-map.cpp php_boxwood.cpp)
HHVM_SYSTEMLIB(boxwood ext_boxwood.php)

