<?

$page_title = 'Include';
$html_title = $page_title . ' | cwalk';
$instructions = 'Include the right header for this program to compile without any warnings.';
$html_description = "$page_title: $instructions";
require_once('header.php');

?>

<div class="instructions">
    <p><?= $instructions ?></p>
</div>

<div class="ide">#include <input type="text" id="input_0" class="input-large"/>

int main(void) {
  int n;

  n = 98;
  printf("%d\n", n);
  return (0);
}
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
