<?php

namespace Toumeh\Cars\Controller;


use Psr\Http\Message\ResponseInterface;
use Toumeh\Cars\Domain\Repository\CarRepository;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;


class CarController extends AbstractController
{
    protected CarRepository $carRepository;

    public function injectCarRepository(CarRepository $carRepository): void
    {
        $this->carRepository = $carRepository;
    }

    public function listAction(): ResponseInterface
    {
//        $this->view->assign(
//            'cars',
//            $this->carRepository->findAll(),
//        );
//        var_dump('hello from car controller');
        return $this->htmlResponse('<h1>Hello World!</h1>');
    }

    public function showAction()
    {

    }

}