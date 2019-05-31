<?php
// use yii\bootstrap\BootstrapAsset;
/* @var $this yii\web\View */
use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
use yii\web\AssetBundle;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>name</th>
                <th>age</th>
                <th>teype</th>
            </tr>
        </thead>
        <tr>
            <td>2</td>
            <td>2</td>
            <td><Button class="btn btn-primary">asdasda </Button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td><Button id="btns" class="btn btn-primary">asdasda </Button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>4</td>
            <td><?= Html::beginForm(['/site/del'], 'post') . Html::submitButton(
                    'sdasdas',
                    ['class' => 'btn btn-primary logout']
                )
                    . Html::endForm() ?></td>

        </tr>

    </table>
</div>
<script>
    $("#btns").on("click", function() {
        $.ajax({
            url:'index.php?r=site/del',
            type: 'post',
            data:{id:1},
            success: function(data) {
                // do something
            }
        });
    });
</script>