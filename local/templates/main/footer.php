<?php
/**
 * Created by PhpStorm.
 * User: IEUser
 * Date: 10/24/2016
 * Time: 7:55 AM
 */
?>
<!-- FOOTER-AREA START -->
<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Контакты</h5>
                    </div>
                    <nav>
                        <ul class="footer-content box-information">
                            <li>
                                <i class="fa fa-home"></i>
                                <span>
                                     <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                         "",
                                         Array(
                                             "COMPONENT_TEMPLATE" => ".default",
                                             "AREA_FILE_SHOW" => "file",
                                             "AREA_FILE_SUFFIX" => "inc",
                                             "EDIT_TEMPLATE" => "",
                                             "PATH" => SITE_TEMPLATE_PATH . "/include_areas/adress.php"
                                         )); ?>
                                  </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH . "/include_areas/e-mail.php"
                                        )); ?>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>
                                          <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                              "",
                                              Array(
                                                  "COMPONENT_TEMPLATE" => ".default",
                                                  "AREA_FILE_SHOW" => "file",
                                                  "AREA_FILE_SUFFIX" => "inc",
                                                  "EDIT_TEMPLATE" => "",
                                                  "PATH" => SITE_TEMPLATE_PATH . "/include_areas/phone1.php"
                                              )); ?>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; Soybeen All rights reserved.</p>
                        <div class="payment">
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/payment.png" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->
