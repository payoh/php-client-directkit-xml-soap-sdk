<?php

namespace Directkit;

class MoneyInIDealInit
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $amountTot
     * @access public
     */
    public $amountTot = null;

    /**
     * @var string $amountCom
     * @access public
     */
    public $amountCom = null;

    /**
     * @var string $comment
     * @access public
     */
    public $comment = null;

    /**
     * @var string $returnUrl
     * @access public
     */
    public $returnUrl = null;

    /**
     * @var string $autoCommission
     * @access public
     */
    public $autoCommission = null;

    /**
     * @var string $issuerId
     * @access public
     */
    public $issuerId = null;

    /**
     * @var string $wlLogin
     * @access public
     */
    public $wlLogin = null;

    /**
     * @var string $wlPass
     * @access public
     */
    public $wlPass = null;

    /**
     * @var string $language
     * @access public
     */
    public $language = null;

    /**
     * @var string $version
     * @access public
     */
    public $version = null;

    /**
     * @var string $walletIp
     * @access public
     */
    public $walletIp = null;

    /**
     * @var string $walletUa
     * @access public
     */
    public $walletUa = null;

    /**
     * @param string $wallet
     * @param string $amountTot
     * @param string $amountCom
     * @param string $comment
     * @param string $returnUrl
     * @param string $autoCommission
     * @param string $issuerId
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $amountTot, $amountCom, $comment, $returnUrl, $autoCommission, $issuerId, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->amountTot = $amountTot;
      $this->amountCom = $amountCom;
      $this->comment = $comment;
      $this->returnUrl = $returnUrl;
      $this->autoCommission = $autoCommission;
      $this->issuerId = $issuerId;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
