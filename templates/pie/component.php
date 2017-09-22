<?php

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

// Output as HTML5
$this->setHtml5(true);

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

// Styles
JHtml::_('stylesheet', 'general.css', array('version' => 'auto', 'relative' => true));

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>"
      dir="<?php echo $this->direction; ?>">

<head>
    <jdoc:include type="head" />
</head>

<body class="contentpane">

<jdoc:include type="message" />

<jdoc:include type="component" />

</body>

</html>


