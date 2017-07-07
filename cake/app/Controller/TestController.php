
<?php
/**
 * /app/Controller/HelloWorldController.php
*/
class TestController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = false;

	/**
	 * indexアクション
	 */
	public function index() {
		echo "Hello World!";
	}
}