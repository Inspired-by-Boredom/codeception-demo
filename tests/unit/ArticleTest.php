<?php

use app\models\Article;
use tests\fixtures\ArticleFixture;
use yii\test\FixtureTrait;

class ArticleTest extends \Codeception\Test\Unit
{
    use FixtureTrait;

    /**
     * @var \UnitTester
     */
    protected $tester;


    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->loadFixtures();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->unloadFixtures();
    }

    /**
     * @inheritdoc
     */
    public function fixtures()
    {
        return [
            'article' => ArticleFixture::class,
        ];
    }

    // tests
    public function testSave()
    {
        $title = 'Test title';
        $description = 'Test description';
        $fullText = 'Test full text';

        $model = new Article([
            'title' => $title,
            'description' => $description,
            'full_text' => $fullText,
        ]);
        $model->save(false);

        $this->tester->seeRecord(Article::class, [
            'title' => $title,
            'description' => $description,
            'full_text' => $fullText,
        ]);
        $this->tester->seeInDatabase(Article::tableName(), [
            'title' => $title,
            'description' => $description,
            'full_text' => $fullText,
        ]);
    }
}
