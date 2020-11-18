<div>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.small-boxes', [])->html();
} elseif ($_instance->childHasBeenRendered('ujuLNIv')) {
    $componentId = $_instance->getRenderedChildComponentId('ujuLNIv');
    $componentTag = $_instance->getRenderedChildComponentTagName('ujuLNIv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ujuLNIv');
} else {
    $response = \Livewire\Livewire::mount('dashboard.small-boxes', []);
    $html = $response->html();
    $_instance->logRenderedChild('ujuLNIv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.reports', [])->html();
} elseif ($_instance->childHasBeenRendered('NUZRG3z')) {
    $componentId = $_instance->getRenderedChildComponentId('NUZRG3z');
    $componentTag = $_instance->getRenderedChildComponentTagName('NUZRG3z');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NUZRG3z');
} else {
    $response = \Livewire\Livewire::mount('dashboard.reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('NUZRG3z', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <div class="row">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.chats', [])->html();
} elseif ($_instance->childHasBeenRendered('qYtOPcD')) {
    $componentId = $_instance->getRenderedChildComponentId('qYtOPcD');
    $componentTag = $_instance->getRenderedChildComponentTagName('qYtOPcD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qYtOPcD');
} else {
    $response = \Livewire\Livewire::mount('dashboard.chats', []);
    $html = $response->html();
    $_instance->logRenderedChild('qYtOPcD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.latest-members', [])->html();
} elseif ($_instance->childHasBeenRendered('jT1saxQ')) {
    $componentId = $_instance->getRenderedChildComponentId('jT1saxQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('jT1saxQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jT1saxQ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.latest-members', []);
    $html = $response->html();
    $_instance->logRenderedChild('jT1saxQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/dashboard/dashboard.blade.php ENDPATH**/ ?>