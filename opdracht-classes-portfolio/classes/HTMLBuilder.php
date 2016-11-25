<?php

class HTMLBuilder
{
  protected $header;
  protected $body;
  protected $footer;

  function __construct( $header, $body, $footer )
  {
    $this->header = $header;
    $this->body   = $body;
    $this->footer = $footer;
  }

  public function buildHeader()
  {
    # code...
  }

  public function buildBody()
  {
    # code...
  }

  public function buildFooter()
  {
    # code...
  }

}
?>
