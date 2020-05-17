<?php
namespace usama165\facebook\Library;

class Facebook
{
    private $fbid;
    private $fbsecret;
    private $fburl;

    public function __construct($fb)
    {
        $this->fbid = $fb['id'];
        $this->fbsecret = $fb['secret'];
        $this->fburl = $fb['url'];
    }

    public function getCreds()
    {
        return [
            'fb_id' => $this->fbid,
            'fb_secret' => $this->fbsecret,
            'fb_url' => $this->fburl,
        ];
    }
}