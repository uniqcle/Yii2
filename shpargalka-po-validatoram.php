<?php 

['categories', 'each', 'rule' => ['integer']],
[['placeId'], 'required'],
[['id'], 'integer'],
[['description'], 'string'],
[['rating'], 'in', 'range' => [1, 2, 3]],
[['someDate'], 'date', 'format' => 'php:Y-m-d'],
[['somePattern'], 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
['endTime', 'compare',
                'compareAttribute' => 'startTime',
                'operator' => '>',
                'message' => Yii::t('validation', 'endtime must be greater than starttime'),
],
[['siteAddress'], 'url'],
[['link'], 'url', 'defaultScheme' => 'http'],  // Validates URL. Prepend scheme if neede


?>