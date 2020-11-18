<div>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.small-boxes', [])->html();
} elseif ($_instance->childHasBeenRendered('PNwf1q0')) {
    $componentId = $_instance->getRenderedChildComponentId('PNwf1q0');
    $componentTag = $_instance->getRenderedChildComponentTagName('PNwf1q0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PNwf1q0');
} else {
    $response = \Livewire\Livewire::mount('dashboard.small-boxes', []);
    $html = $response->html();
    $_instance->logRenderedChild('PNwf1q0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.reports', [])->html();
} elseif ($_instance->childHasBeenRendered('O8XYvSo')) {
    $componentId = $_instance->getRenderedChildComponentId('O8XYvSo');
    $componentTag = $_instance->getRenderedChildComponentTagName('O8XYvSo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('O8XYvSo');
} else {
    $response = \Livewire\Livewire::mount('dashboard.reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('O8XYvSo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <div class="row">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.chats', [])->html();
} elseif ($_instance->childHasBeenRendered('bMHYsjC')) {
    $componentId = $_instance->getRenderedChildComponentId('bMHYsjC');
    $componentTag = $_instance->getRenderedChildComponentTagName('bMHYsjC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bMHYsjC');
} else {
    $response = \Livewire\Livewire::mount('dashboard.chats', []);
    $html = $response->html();
    $_instance->logRenderedChild('bMHYsjC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.latest-members', [])->html();
} elseif ($_instance->childHasBeenRendered('R2xE1do')) {
    $componentId = $_instance->getRenderedChildComponentId('R2xE1do');
    $componentTag = $_instance->getRenderedChildComponentTagName('R2xE1do');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('R2xE1do');
} else {
    $response = \Livewire\Livewire::mount('dashboard.latest-members', []);
    $html = $response->html();
    $_instance->logRenderedChild('R2xE1do', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php /**PATH /var/www/web/aiomlm/resources/views/dashboard/dashboard.blade.php ENDPATH**/ ?>