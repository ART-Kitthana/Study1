<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-09-03 at 09:19:01.
 */
class CurrencyTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @var Currency
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Currency();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  /**
   * Generated from @assert (1000, 7, true) [==] 70.
   *
   * @covers Kotchasan\Currency::calcVat
   */
  public function testCalcVat()
  {

    $this->assertEquals(
      70
      , \Kotchasan\Currency::calcVat(1000, 7, true)
    );
  }

  /**
   * Generated from @assert (1000, 7, false) [==] 65.420560747663558.
   *
   * @covers Kotchasan\Currency::calcVat
   */
  public function testCalcVat2()
  {

    $this->assertEquals(
      65.420560747663558
      , \Kotchasan\Currency::calcVat(1000, 7, false)
    );
  }

  /**
   * Generated from @assert (100.00) [==] 'one hundred Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng()
  {

    $this->assertEquals(
      'one hundred Baht'
      , \Kotchasan\Currency::bahtEng(100.00)
    );
  }

  /**
   * Generated from @assert (101.00) [==] 'one hundred and one Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng2()
  {

    $this->assertEquals(
      'one hundred and one Baht'
      , \Kotchasan\Currency::bahtEng(101.00)
    );
  }

  /**
   * Generated from @assert (1000.50) [==] 'one thousand Baht and fifty Satang'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng3()
  {

    $this->assertEquals(
      'one thousand Baht and fifty Satang'
      , \Kotchasan\Currency::bahtEng(1000.50)
    );
  }

  /**
   * Generated from @assert (1000050) [==] 'one million fifty Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng4()
  {

    $this->assertEquals(
      'one million fifty Baht'
      , \Kotchasan\Currency::bahtEng(1000050)
    );
  }

  /**
   * Generated from @assert (-1000000050) [==] 'negative one billion fifty Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng5()
  {

    $this->assertEquals(
      'negative one billion fifty Baht'
      , \Kotchasan\Currency::bahtEng(-1000000050)
    );
  }

  /**
   * Generated from @assert (1000000050) [==] 'one billion fifty Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng6()
  {

    $this->assertEquals(
      'one billion fifty Baht'
      , \Kotchasan\Currency::bahtEng(1000000050)
    );
  }

  /**
   * Generated from @assert (10000000050.25) [==] 'ten billion fifty Baht and twenty-five Satang'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng7()
  {

    $this->assertEquals(
      'ten billion fifty Baht and twenty-five Satang'
      , \Kotchasan\Currency::bahtEng(10000000050.25)
    );
  }

  /**
   * Generated from @assert (101.00) [==] '????????????????????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai()
  {

    $this->assertEquals(
      '????????????????????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(101.00)
    );
  }

  /**
   * Generated from @assert (1000.50) [==] '?????????????????????????????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai2()
  {

    $this->assertEquals(
      '?????????????????????????????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(1000.50)
    );
  }

  /**
   * Generated from @assert (1000.00) [==] '?????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai3()
  {

    $this->assertEquals(
      '?????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(1000.00)
    );
  }

  /**
   * Generated from @assert (1000) [==] '?????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai4()
  {

    $this->assertEquals(
      '?????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(1000)
    );
  }

  /**
   * Generated from @assert (1000050) [==] '??????????????????????????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai5()
  {

    $this->assertEquals(
      '??????????????????????????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(1000050)
    );
  }

  /**
   * Generated from @assert (-1000000050) [==] '?????????????????????????????????????????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai6()
  {

    $this->assertEquals(
      '?????????????????????????????????????????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(-1000000050)
    );
  }

  /**
   * Generated from @assert (10000000050.25) [==] '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai7()
  {

    $this->assertEquals(
      '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????'
      , \Kotchasan\Currency::bahtThai(10000000050.25)
    );
  }
}