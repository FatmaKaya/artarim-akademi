<style>
    .m-aside-menu.m-aside-menu--skin-light .m-menu__nav > .m-menu__item.m-menu__item--active > .m-menu__link .m-menu__link-icon {
        color: #444;
    }
    .m-aside-menu.m-aside-menu--skin-light .m-menu__nav > .m-menu__item.m-menu__item--active > .m-menu__link .m-menu__link-text {
        font-weight: 600;
        color: #444;
    }
    /*    .m-aside-menu.m-aside-menu--skin-light .m-menu__nav > .m-menu__item.m-menu__item--active > .m-menu__link {
            background-color: #5766dd;
        }*/
</style>

<?php

$url = $_SERVER["REQUEST_URI"];
$url = str_replace("admin/","",$url);
$url = ltrim($url,"/");
$urlArr = explode("/",$url);
$url = $urlArr[0];
?>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light" data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <?php foreach ($panelMenu as $key => $value) {
            if($value->type == "infos") {
                $value->type = $value->type."/".$value->id;
            }
            ?>
        <!--m-menu__item--active-->
            <li class="m-menu__item <?php if($url == $value->type) echo "m-menu__item--active";?>">
                <a  href="<?php echo env("APP_URL")."/admin/".$value->type?>" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon material-icons"><?php echo $value->icon?></i>
                    <span class="m-menu__link-text">
						<?php echo $value->name;?>
					</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>


