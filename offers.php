<?php
header('Content-Type: application/json');
$offers = [
  [
    'id' => 'today1',
    'type' => 'today',
    'title' => 'High-Performance Laptop',
    'description' => 'Experience blazing speed and power. Save big on our best-selling laptop. Offer ends soon!',
    'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=600&q=80',
    'cta' => 'Shop'
  ],
  [
    'id' => 'bundle1',
    'type' => 'bundle',
    'title' => 'Laptop & Mouse Bundle',
    'description' => 'Get a free wireless mouse with any laptop purchase.',
    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Shop Bundle'
  ],
  [
    'id' => 'bundle2',
    'type' => 'bundle',
    'title' => 'Desktop & Keyboard Bundle',
    'description' => 'Complete your setup with an advanced keyboard. Save more with this bundle.',
    'image' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Shop Bundle'
  ],
  [
    'id' => 'clearance1',
    'type' => 'clearance',
    'title' => 'Wireless Headphones',
    'description' => 'High-fidelity, noise-cancelling headphones at a huge discount.',
    'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Shop Clearance'
  ],
  [
    'id' => 'clearance2',
    'type' => 'clearance',
    'title' => 'Gaming Mouse',
    'description' => 'Precision, speed, and comfort for your gaming needs.',
    'image' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Shop Clearance'
  ],
  [
    'id' => 'clearance3',
    'type' => 'clearance',
    'title' => 'External Hard Drive',
    'description' => 'Store more, save more. Reliable storage at a clearance price.',
    'image' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Shop Clearance'
  ],
  [
    'id' => 'discount1',
    'type' => 'discount',
    'title' => 'Student Discount',
    'description' => 'Verify your student status and receive an exclusive discount on all products.',
    'image' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Verify Now'
  ],
  [
    'id' => 'discount2',
    'type' => 'discount',
    'title' => 'Corporate Offers',
    'description' => 'Bulk purchases and tailored solutions for businesses. Contact us for exclusive rates.',
    'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=400&q=80',
    'cta' => 'Verify Now'
  ]
];
echo json_encode($offers); 