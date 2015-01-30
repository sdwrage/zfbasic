<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Blog\Service\PostServiceInterface;
use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController {

  protected $postService;

  public function __construct(PostServiceInterface $postService) {
    $this->postService = $postService;
  }

  public function indexAction()
  {
    return array('posts' => $this->postService->findAllPosts());
  }
}