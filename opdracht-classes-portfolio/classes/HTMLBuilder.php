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
    include glob('../css/*.css');
    include 'html/'.$this->header;
  }

  public function buildBody()
  {
    include 'html/'.$this->body;
  }

  public function buildFooter()
  {
    include 'html/'.$this->footer;
  }

}
?>
