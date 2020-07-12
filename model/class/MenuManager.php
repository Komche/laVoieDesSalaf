<?php

class MenuManager
{

    public $mName;
    public $mSousMenu;

    public function __construct($mName)
    {
        $this->mName = $mName;
    }

    public function getmName()
    {
        return $this->mName;
    }

    public function getmSousMenu()
    {
        return $this->mSousMenu;
    }

    public function getMenu($icon = 'fa-dashboard')
    {
        if ($icon == '') {
            $icon = 'fa-dashboard';
        }
        return '
            <li >
            <a href="javaScript:void();">
            <i class="fa ' . $icon . '"></i><span>' . $this->mName . '</span><i class="feather icon-chevron-right pull-right"></i>
            </a>
            <ul class="vertical-submenu">
                ' . $this->mSousMenu . '
            </ul>
          </li>
        ';
    }

    public function setmSousMenu($mSousMenu = [])
    {
        foreach ($mSousMenu as $key => $value) {
            $this->mSousMenu .= '<li><a href="' . $key . '">' . $value . '</a></li>';
        }
    }

    public function setmName($mName)
    {
        $this->mName = $mName;
    }
}
