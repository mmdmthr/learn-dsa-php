<?php

class ListNode
{
    public $data = null;
    public $next = null;

    public function __construct(string $data = null)
    {
        $this->data = $data;
    }
}

class LinkedList 
{
    private $_firstNode = null;
    private $_totalNode = 0;

    public function insert(string $data = null)
    {
        $newNode = new ListNode($data);

        // insert first node on start
        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            // find the last node which has null next node
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            // insert second node
            $currentNode->next = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function display()
    {
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== null) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    public function insertAtFirst(string $data = null)
    {
        $newNode = new ListNode($data);

        // insert first node at start
        if ($this->_firstNode = null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            // replace current first node with the new node
            $this->_firstNode = &$newNode;
            // move current first node into second node
            $newNode->next = $currentFirstNode;
        }

        $this->_totalNode++;
        return true;
    }

    public function search(string $data = null)
    {
        if ($this->_totalNode) {
            $currentNode = $this->firstNode;
            while ($currentNode !== null) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }

        return false;
    }
}

$bookTitles = new LinkedList();
$bookTitles->insert("Introduction to Algorithm");
$bookTitles->insert("PHP and Data Structures");
$bookTitles->insert("Programming Intelligence");
$bookTitles->display();
