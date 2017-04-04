<?php

namespace Directkit;

class RegisterCard_EXTRA
{

    /**
     * @var string $IS3DS
     * @access public
     */
    public $IS3DS = null;

    /**
     * @var string $CTRY
     * @access public
     */
    public $CTRY = null;

    /**
     * @var string $AUTH
     * @access public
     */
    public $AUTH = null;

    /**
     * @var string $NUM
     * @access public
     */
    public $NUM = null;

    /**
     * @var string $EXP
     * @access public
     */
    public $EXP = null;

    /**
     * @param string $IS3DS
     * @param string $CTRY
     * @param string $AUTH
     * @param string $NUM
     * @param string $EXP
     * @access public
     */
    public function __construct($IS3DS, $CTRY, $AUTH, $NUM, $EXP)
    {
      $this->IS3DS = $IS3DS;
      $this->CTRY = $CTRY;
      $this->AUTH = $AUTH;
      $this->NUM = $NUM;
      $this->EXP = $EXP;
    }

}
