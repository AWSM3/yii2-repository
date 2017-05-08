<?php
declare(strict_types=1);

namespace Awsm3\Yii2Repository;

use yii\db\ActiveRecord;

/**
 * Class Repository
 * @package Awsm3\Yii2Repository
 */
class Repository
{
    const PRIMARY_KEY = 'id';
    const APPLICATION_KEY = 'id';

    const DESC = 'DESC';
    const ASC = 'ASC';

    /**
     * @var string
     */
    protected $primaryKey;

    /**
     * @var string
     */
    protected $applicationKey;

    /**
     * @var string
     */
    protected $desc;

    /**
     * @var string
     */
    protected $asc;

    /**
     * Repository constructor.
     */
    public function __construct(ActiveRecord $model)
    {
        $this->primaryKey = $this->primaryKey ?? self::PRIMARY_KEY;
        $this->applicationKey = $this->applicationKey ?? self::APPLICATION_KEY;
        $this->desc = $this->desc ?? self::DESC;
        $this->asc = $this->asc ?? self::ASC;

        $this->orderBy = [$this->primaryKey => $this->desc];

        $this->model = $model;

        $this->initRepositoryParams();
    }
}
