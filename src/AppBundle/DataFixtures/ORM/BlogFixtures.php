<?php
/**
 * Created by IntelliJ IDEA.
 * User: mstzn
 * Date: 23/12/16
 * Time: 21:30
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('A day with Symfony2');
        $blog1->setSlug('a-day-with-symfony-2');
        $blog1->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada lobortis suscipit. Phasellus non lectus tincidunt, tempus ante id, sagittis elit. Sed a rhoncus quam, et bibendum quam. Cras eget facilisis nisi. Donec fringilla quis ipsum molestie facilisis. Donec eu aliquam nibh, nec porttitor sapien. Quisque accumsan mattis vulputate. Nulla imperdiet risus sit amet massa lobortis viverra. Phasellus sagittis lacus eu bibendum aliquet. Duis mauris massa, tristique sit amet blandit eget, sodales ac mi. Suspendisse ac vulputate neque, at mollis libero. Donec tincidunt ultrices tristique.
        Sed et sodales velit, et faucibus est. Aliquam aliquet auctor nunc, sed faucibus nisi aliquam in. Donec commodo, nunc at lobortis sagittis, quam nunc volutpat sem, sed tempus metus ligula eu nulla. Etiam porta felis quis enim consectetur, at molestie ante rutrum. Morbi leo lacus, porta vel molestie vel, hendrerit vitae purus. Morbi condimentum viverra elit, in dapibus enim aliquam id. Sed id tristique sapien, in hendrerit orci. Etiam maximus laoreet elit. Nunc commodo convallis urna, vitae faucibus justo ultricies sit amet. Nunc congue, nisi eget tincidunt maximus, erat urna scelerisque ex, non iaculis metus mauris vel mi.
        Cras faucibus, nunc ut semper pellentesque, magna augue rutrum urna, non tincidunt erat mauris eu ligula. Etiam elit nibh, molestie et aliquet a, maximus quis risus. Morbi bibendum blandit enim, sed hendrerit turpis placerat vitae. Pellentesque rutrum aliquam tincidunt. Aenean et lobortis justo, ut cursus magna. Pellentesque vulputate a dui interdum mollis. Nulla pulvinar scelerisque mauris eget tempus. Nulla accumsan commodo nunc non commodo. Vestibulum volutpat congue nisi sit amet dapibus. Donec ex leo, feugiat sit amet bibendum eget, ornare eget quam. Sed vehicula nisl at volutpat posuere. Nunc tincidunt turpis diam, in euismod tellus molestie eu. Curabitur luctus ligula scelerisque erat ultricies fringilla. Proin vitae ipsum quam.
        Suspendisse eu est ante. In mattis, ante nec aliquet ultrices, sapien odio suscipit dolor, quis lobortis elit ipsum nec nisi. Sed pretium bibendum ipsum id accumsan. Quisque gravida augue ut sapien ullamcorper consectetur. Fusce interdum sapien vitae felis pellentesque tempus. Etiam consectetur lacinia urna, eu imperdiet tellus feugiat non. Sed iaculis iaculis nunc, ut tristique arcu bibendum in. Proin venenatis sollicitudin ullamcorper. Sed imperdiet, ante id eleifend cursus, magna ligula sollicitudin lacus, ac ornare nulla quam quis elit. Phasellus a aliquet sem, at rhoncus orci. Donec non dolor sed ex dictum tincidunt et et lorem.');
        $blog1->setAuthor('mstzn');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('The pool on the roof must have a leak');
        $blog2->setSlug('the-pool-on-the-roof-must-have-a-leak');
        $blog2->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada lobortis suscipit. Phasellus non lectus tincidunt, tempus ante id, sagittis elit. Sed a rhoncus quam, et bibendum quam. Cras eget facilisis nisi. Donec fringilla quis ipsum molestie facilisis. Donec eu aliquam nibh, nec porttitor sapien. Quisque accumsan mattis vulputate. Nulla imperdiet risus sit amet massa lobortis viverra. Phasellus sagittis lacus eu bibendum aliquet. Duis mauris massa, tristique sit amet blandit eget, sodales ac mi. Suspendisse ac vulputate neque, at mollis libero. Donec tincidunt ultrices tristique.
        Sed et sodales velit, et faucibus est. Aliquam aliquet auctor nunc, sed faucibus nisi aliquam in. Donec commodo, nunc at lobortis sagittis, quam nunc volutpat sem, sed tempus metus ligula eu nulla. Etiam porta felis quis enim consectetur, at molestie ante rutrum. Morbi leo lacus, porta vel molestie vel, hendrerit vitae purus. Morbi condimentum viverra elit, in dapibus enim aliquam id. Sed id tristique sapien, in hendrerit orci. Etiam maximus laoreet elit. Nunc commodo convallis urna, vitae faucibus justo ultricies sit amet. Nunc congue, nisi eget tincidunt maximus, erat urna scelerisque ex, non iaculis metus mauris vel mi.
        Cras faucibus, nunc ut semper pellentesque, magna augue rutrum urna, non tincidunt erat mauris eu ligula. Etiam elit nibh, molestie et aliquet a, maximus quis risus. Morbi bibendum blandit enim, sed hendrerit turpis placerat vitae. Pellentesque rutrum aliquam tincidunt. Aenean et lobortis justo, ut cursus magna. Pellentesque vulputate a dui interdum mollis. Nulla pulvinar scelerisque mauris eget tempus. Nulla accumsan commodo nunc non commodo. Vestibulum volutpat congue nisi sit amet dapibus. Donec ex leo, feugiat sit amet bibendum eget, ornare eget quam. Sed vehicula nisl at volutpat posuere. Nunc tincidunt turpis diam, in euismod tellus molestie eu. Curabitur luctus ligula scelerisque erat ultricies fringilla. Proin vitae ipsum quam.
        Suspendisse eu est ante. In mattis, ante nec aliquet ultrices, sapien odio suscipit dolor, quis lobortis elit ipsum nec nisi. Sed pretium bibendum ipsum id accumsan. Quisque gravida augue ut sapien ullamcorper consectetur. Fusce interdum sapien vitae felis pellentesque tempus. Etiam consectetur lacinia urna, eu imperdiet tellus feugiat non. Sed iaculis iaculis nunc, ut tristique arcu bibendum in. Proin venenatis sollicitudin ullamcorper. Sed imperdiet, ante id eleifend cursus, magna ligula sollicitudin lacus, ac ornare nulla quam quis elit. Phasellus a aliquet sem, at rhoncus orci. Donec non dolor sed ex dictum tincidunt et et lorem.');
        $blog2->setAuthor('mstzn');
        $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog3->setSlug('misdirection-what-the-eyes-see-and-the-ears-hear-the-mind-believes');
        $blog3->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada lobortis suscipit. Phasellus non lectus tincidunt, tempus ante id, sagittis elit. Sed a rhoncus quam, et bibendum quam. Cras eget facilisis nisi. Donec fringilla quis ipsum molestie facilisis. Donec eu aliquam nibh, nec porttitor sapien. Quisque accumsan mattis vulputate. Nulla imperdiet risus sit amet massa lobortis viverra. Phasellus sagittis lacus eu bibendum aliquet. Duis mauris massa, tristique sit amet blandit eget, sodales ac mi. Suspendisse ac vulputate neque, at mollis libero. Donec tincidunt ultrices tristique.
        Sed et sodales velit, et faucibus est. Aliquam aliquet auctor nunc, sed faucibus nisi aliquam in. Donec commodo, nunc at lobortis sagittis, quam nunc volutpat sem, sed tempus metus ligula eu nulla. Etiam porta felis quis enim consectetur, at molestie ante rutrum. Morbi leo lacus, porta vel molestie vel, hendrerit vitae purus. Morbi condimentum viverra elit, in dapibus enim aliquam id. Sed id tristique sapien, in hendrerit orci. Etiam maximus laoreet elit. Nunc commodo convallis urna, vitae faucibus justo ultricies sit amet. Nunc congue, nisi eget tincidunt maximus, erat urna scelerisque ex, non iaculis metus mauris vel mi.
        Cras faucibus, nunc ut semper pellentesque, magna augue rutrum urna, non tincidunt erat mauris eu ligula. Etiam elit nibh, molestie et aliquet a, maximus quis risus. Morbi bibendum blandit enim, sed hendrerit turpis placerat vitae. Pellentesque rutrum aliquam tincidunt. Aenean et lobortis justo, ut cursus magna. Pellentesque vulputate a dui interdum mollis. Nulla pulvinar scelerisque mauris eget tempus. Nulla accumsan commodo nunc non commodo. Vestibulum volutpat congue nisi sit amet dapibus. Donec ex leo, feugiat sit amet bibendum eget, ornare eget quam. Sed vehicula nisl at volutpat posuere. Nunc tincidunt turpis diam, in euismod tellus molestie eu. Curabitur luctus ligula scelerisque erat ultricies fringilla. Proin vitae ipsum quam.
        Suspendisse eu est ante. In mattis, ante nec aliquet ultrices, sapien odio suscipit dolor, quis lobortis elit ipsum nec nisi. Sed pretium bibendum ipsum id accumsan. Quisque gravida augue ut sapien ullamcorper consectetur. Fusce interdum sapien vitae felis pellentesque tempus. Etiam consectetur lacinia urna, eu imperdiet tellus feugiat non. Sed iaculis iaculis nunc, ut tristique arcu bibendum in. Proin venenatis sollicitudin ullamcorper. Sed imperdiet, ante id eleifend cursus, magna ligula sollicitudin lacus, ac ornare nulla quam quis elit. Phasellus a aliquet sem, at rhoncus orci. Donec non dolor sed ex dictum tincidunt et et lorem.');
        $blog3->setAuthor('mstzn');
        $blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('The grid - A digital frontier');
        $blog4->setSlug('the-grid-a-digital-frontier');
        $blog4->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada lobortis suscipit. Phasellus non lectus tincidunt, tempus ante id, sagittis elit. Sed a rhoncus quam, et bibendum quam. Cras eget facilisis nisi. Donec fringilla quis ipsum molestie facilisis. Donec eu aliquam nibh, nec porttitor sapien. Quisque accumsan mattis vulputate. Nulla imperdiet risus sit amet massa lobortis viverra. Phasellus sagittis lacus eu bibendum aliquet. Duis mauris massa, tristique sit amet blandit eget, sodales ac mi. Suspendisse ac vulputate neque, at mollis libero. Donec tincidunt ultrices tristique.
        Sed et sodales velit, et faucibus est. Aliquam aliquet auctor nunc, sed faucibus nisi aliquam in. Donec commodo, nunc at lobortis sagittis, quam nunc volutpat sem, sed tempus metus ligula eu nulla. Etiam porta felis quis enim consectetur, at molestie ante rutrum. Morbi leo lacus, porta vel molestie vel, hendrerit vitae purus. Morbi condimentum viverra elit, in dapibus enim aliquam id. Sed id tristique sapien, in hendrerit orci. Etiam maximus laoreet elit. Nunc commodo convallis urna, vitae faucibus justo ultricies sit amet. Nunc congue, nisi eget tincidunt maximus, erat urna scelerisque ex, non iaculis metus mauris vel mi.
        Cras faucibus, nunc ut semper pellentesque, magna augue rutrum urna, non tincidunt erat mauris eu ligula. Etiam elit nibh, molestie et aliquet a, maximus quis risus. Morbi bibendum blandit enim, sed hendrerit turpis placerat vitae. Pellentesque rutrum aliquam tincidunt. Aenean et lobortis justo, ut cursus magna. Pellentesque vulputate a dui interdum mollis. Nulla pulvinar scelerisque mauris eget tempus. Nulla accumsan commodo nunc non commodo. Vestibulum volutpat congue nisi sit amet dapibus. Donec ex leo, feugiat sit amet bibendum eget, ornare eget quam. Sed vehicula nisl at volutpat posuere. Nunc tincidunt turpis diam, in euismod tellus molestie eu. Curabitur luctus ligula scelerisque erat ultricies fringilla. Proin vitae ipsum quam.
        Suspendisse eu est ante. In mattis, ante nec aliquet ultrices, sapien odio suscipit dolor, quis lobortis elit ipsum nec nisi. Sed pretium bibendum ipsum id accumsan. Quisque gravida augue ut sapien ullamcorper consectetur. Fusce interdum sapien vitae felis pellentesque tempus. Etiam consectetur lacinia urna, eu imperdiet tellus feugiat non. Sed iaculis iaculis nunc, ut tristique arcu bibendum in. Proin venenatis sollicitudin ullamcorper. Sed imperdiet, ante id eleifend cursus, magna ligula sollicitudin lacus, ac ornare nulla quam quis elit. Phasellus a aliquet sem, at rhoncus orci. Donec non dolor sed ex dictum tincidunt et et lorem.');
        $blog4->setAuthor('mstzn');
        $blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog5->setSlug('youre-either-a-one-or-a-zero-alive-or-dead');
        $blog5->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut malesuada lobortis suscipit. Phasellus non lectus tincidunt, tempus ante id, sagittis elit. Sed a rhoncus quam, et bibendum quam. Cras eget facilisis nisi. Donec fringilla quis ipsum molestie facilisis. Donec eu aliquam nibh, nec porttitor sapien. Quisque accumsan mattis vulputate. Nulla imperdiet risus sit amet massa lobortis viverra. Phasellus sagittis lacus eu bibendum aliquet. Duis mauris massa, tristique sit amet blandit eget, sodales ac mi. Suspendisse ac vulputate neque, at mollis libero. Donec tincidunt ultrices tristique.
        Sed et sodales velit, et faucibus est. Aliquam aliquet auctor nunc, sed faucibus nisi aliquam in. Donec commodo, nunc at lobortis sagittis, quam nunc volutpat sem, sed tempus metus ligula eu nulla. Etiam porta felis quis enim consectetur, at molestie ante rutrum. Morbi leo lacus, porta vel molestie vel, hendrerit vitae purus. Morbi condimentum viverra elit, in dapibus enim aliquam id. Sed id tristique sapien, in hendrerit orci. Etiam maximus laoreet elit. Nunc commodo convallis urna, vitae faucibus justo ultricies sit amet. Nunc congue, nisi eget tincidunt maximus, erat urna scelerisque ex, non iaculis metus mauris vel mi.
        Cras faucibus, nunc ut semper pellentesque, magna augue rutrum urna, non tincidunt erat mauris eu ligula. Etiam elit nibh, molestie et aliquet a, maximus quis risus. Morbi bibendum blandit enim, sed hendrerit turpis placerat vitae. Pellentesque rutrum aliquam tincidunt. Aenean et lobortis justo, ut cursus magna. Pellentesque vulputate a dui interdum mollis. Nulla pulvinar scelerisque mauris eget tempus. Nulla accumsan commodo nunc non commodo. Vestibulum volutpat congue nisi sit amet dapibus. Donec ex leo, feugiat sit amet bibendum eget, ornare eget quam. Sed vehicula nisl at volutpat posuere. Nunc tincidunt turpis diam, in euismod tellus molestie eu. Curabitur luctus ligula scelerisque erat ultricies fringilla. Proin vitae ipsum quam.
        Suspendisse eu est ante. In mattis, ante nec aliquet ultrices, sapien odio suscipit dolor, quis lobortis elit ipsum nec nisi. Sed pretium bibendum ipsum id accumsan. Quisque gravida augue ut sapien ullamcorper consectetur. Fusce interdum sapien vitae felis pellentesque tempus. Etiam consectetur lacinia urna, eu imperdiet tellus feugiat non. Sed iaculis iaculis nunc, ut tristique arcu bibendum in. Proin venenatis sollicitudin ullamcorper. Sed imperdiet, ante id eleifend cursus, magna ligula sollicitudin lacus, ac ornare nulla quam quis elit. Phasellus a aliquet sem, at rhoncus orci. Donec non dolor sed ex dictum tincidunt et et lorem.');
        $blog5->setAuthor('mstzn');
        $blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);

        $manager->flush();
    }

}