{ pkgs }: {
	deps = [
    (pkgs.php.buildEnv {
    	extraConfig = "
      error_reporting=On
      upload_max_filesize = 300M
      post_max_size = 300M
      max_file_uploads = 250
      zend_extension=${pkgs.phpExtensions.xdebug}/lib/php/extensions/xdebug.so
      ";
    })
    pkgs.phpExtensions.curl
    pkgs.phpExtensions.mbstring
    pkgs.phpExtensions.pdo
    pkgs.phpExtensions.opcache
    pkgs.phpExtensions.imagick
    pkgs.phpExtensions.mysqli
    pkgs.phpExtensions.xdebug
    pkgs.phpPackages.phpcs
    pkgs.phpPackages.phpstan
    pkgs.phpPackages.psalm
    pkgs.phpPackages.composer
	];
}