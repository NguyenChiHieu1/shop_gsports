<?php
define("APP_URL", "http://localhost/helmet_shop/");
//define("APP_URL", "http://192.168.1.97:7999/helmet_shop/");

// update these values if you change its corresponding data in db
define("ID_ROLE_ADMIN", 1);
define("ID_ROLE_MANAGER", 2);
define("ID_ROLE_APPROVER", 3);
define("ID_ROLE_SHIPPER", 4);
define("ID_ROLE_CUSTOMER", 5);

define("SHOP_NAME", "THE HELMET SHOP GSPORTS");
define("SHOP_PHONE", "0999.369.639");
define("SHOP_ADDRESS", "Số 54 Triều Khúc, Thanh Xuân, Hà Nội");
define("SHOP_EMAIL", "gsports_helmet_shop@gmail.com");

// status
define("DEACTIVATED", 0);
define("ACTIVATED",1);

// trang thai don hang
define("ORDER_PENDING", 0);			// chua duyet
define("ORDER_WAITFORSHIPPER", 1);	// cho shipper xac nhan
define("ORDER_INDELIVERY", 2);		// dang giao
define("ORDER_FINISHED", 3);		// hoan tat
define("ORDER_CANCELLED", 4);		// huy
define("ORDER_MYSHIPORDERS", 5);	// for shipper only
define("ORDER_REVOKE", 6);			// thu hoi, dua ve pending

//define("MAX_SELECT_QTY", 1000); // số lượng tối đa mà user có thể chọn cho mỗi món hàng trong 1 session
define("PRICE_DECIMALS", 2);
?>