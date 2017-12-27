<?php
/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService('easyComm', 'easyComm', $modx->getOption('ec_core_path', null, $modx->getOption('core_path') . 'components/easycomm/') . 'model/easycomm/', $scriptProperties)) {
    return 'Could not load easyComm class!';
}

/* @var string $thread */
$thread = $modx->getOption('thread', $scriptProperties, '');
if(empty($thread)) {
    $thread = 'resource-'.$modx->resource->get('id');
}

$ratingMax = (float)$modx->getOption('ec_rating_max', $scriptProperties, 5);

$data = array(
    'rating_wilson' => 0,
    'rating_simple' => 0,
    'rating_wilson_percent' => 0,
    'rating_simple_percent' => 0,
    'rating_max' => $ratingMax,
);

/* @var MODx $modx */
/* @var ecThread $thread */
$thread = $modx->getObject('ecThread', array('name' => $thread));

if(!empty($thread)) {
    $data = array_merge(
        $data,
        $thread->toArray(),
        array(
            'rating_wilson_percent' => number_format($thread->get('rating_wilson') / $ratingMax * 100, 3),
            'rating_simple_percent' => number_format($thread->get('rating_simple') / $ratingMax * 100, 3),
        )
    );
}

$tpl = $modx->getOption('tpl', $scriptProperties, '');
$fastMode = !empty($fastMode);
$output = $easyComm->getChunk($tpl, $data, $fastMode);

$toPlaceholder = $modx->getOption('toPlaceholder', $scriptProperties, '');
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
}
else {
    return $output;
}
