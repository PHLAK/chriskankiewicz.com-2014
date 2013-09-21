<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DirectoryIterator;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        // Initialize view model
        $view = new ViewModel();

        // Get array of images
        $iterator = new DirectoryIterator('public/img/header_images');

        // print_r($images); die(); // Debugging

        // Build array of file names
        foreach ($iterator as $file) {
            if (!$file->isDot()) {
                $headerImages[] = $file->getFilename();
            }
        }

        // print_r($headerImages); die(); // Debugging

        // Shuffle the array
        shuffle($headerImages);

        // Pass header image to the view
        $view->setVariable('headerImage', $headerImages[0]);

        return $view;
    }
}
