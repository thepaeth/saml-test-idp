<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
            'name' => 'user1',
            'org_name' => 'org-01',
            'org_title' => 'หน่วยงานทดสอบ 1'
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
            'name' => 'user2',
            'org_name' => 'org-02',
            'org_title' => 'หน่วยงานทดสอบ 2'
        ),
        'user3:user3pass' => array(
            'uid' => array('3'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user3@example.com',
            'name' => 'user3',
            'org_name' => 'org-02',
            'org_title' => 'หน่วยงานทดสอบ 2'
        ),
        'user4:user4pass' => array(
            'uid' => array('4'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user4@example.com',
            'name' => 'user4',
            'org_name' => 'org-01',
            'org_title' => 'หน่วยงานทดสอบ 1'
        ),
        'user5:user5pass' => array(
            'uid' => array('5'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user5@example.com',
            'name' => 'user5',
            'org_name' => 'org-02',
            'org_title' => 'หน่วยงานทดสอบ 2'
        ),
    ),

);
