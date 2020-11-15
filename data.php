<?php
include_once('./model/WebSite.php');
include_once('./model/Link.php');
include_once('./model/Item.php');
include_once('./model/Slide.php');
include_once('./model/Address.php');

$WebSite = new WebSite(
    1,
    'Fish Market',
    'Your desier fish provider',
    '2020',
    new Address(1, 'Parmanent', 'Block-A, Section-11, Road-7, Pallabi, Dhaka 1216', '', 'Dhaka', 'Dhaka', '1216')
);

$Menus = [
    new Link(1, 'category', 'River Fish'),
    new Link(2, 'category', 'Sea Fish'),
    new Link(3, 'category', 'Cannel Fish'),
    new Link(4, 'category', 'Market Fish'),
    new Link(5, 'page', 'About'),
    new Link(6, 'page', 'Contact')
];

$Items = [
    new Item(1, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 1),
    new Item(2, 'নদীর বোয়াল', 700, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 3),
    new Item(3, 'নদীর বোয়াল', 450, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/mane.jpeg', 3),
    new Item(4, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(5, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(6, 'নদীর বোয়াল', 650, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 1),
    new Item(7, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
    new Item(8, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(9, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 3),
    new Item(10, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
    new Item(11, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
    new Item(12, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
    new Item(13, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/mane.jpeg', 3),
    new Item(14, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(15, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(16, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 1),
    new Item(17, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
    new Item(18, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 4),
    new Item(19, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 3),
    new Item(10, 'নদীর বোয়াল', 350, 'মাওয়া ঘাট থেকে সংগ্রহ করা পদ্মার বোয়াল মাছ।  প্রতিটি মাছের ওজন কম বেশি ১কেজি।', '/assets/img/items/image0.jpeg', 2),
];

$SlideItems = [
    new Slide(1, 'img1', "/assets/img/slide/IMG1.jpg"),
    new Slide(2, 'img2', '/assets/img/slide/IMG2.jpg'),
    new Slide(3, 'img3', '/assets/img/slide/IMG3.jpg'),
    new Slide(4, 'img4', '/assets/img/slide/IMG4.jpg'),
    new Slide(5, 'img5', '/assets/img/slide/IMG5.jpg')
];

