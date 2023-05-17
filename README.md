# php-exercises-verification-alex

 Q1. You are given a binary tree data structure, represented by a root node. Implement the function largerSubtree to find which subtree of the root node, relative to the node you are given, has more nodes. If the left subtree has more nodes, return "left"; if the right subtree has more nodes, return "right"; and if both subtrees have an equal number of nodes, return "none".
Here's an example code to test your function:

Work on this exercise from this starting code:

class TreeNode {
    public $val;
    public $left;
    public $right;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

function largerSubtree($root) {
    // your code here
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);
$root->right->left = new TreeNode(6);
$root->right->right = new TreeNode(7);

// should output "right"
echo largerSubtree($root) . "\n";

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);

// should output "none"
echo largerSubtree($root) . "\n";

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->left->left = new TreeNode(4);
$root->left->left->left = new TreeNode(8);

// should output "left"
echo largerSubtree($root) . "\n";


Q2. Implement a function reverseWords that takes a string as input and returns the string with each word reversed, while maintaining the order of the words in the string.

For example, reverseWords("Hello world") should return "olleH dlrow", and reverseWords("The quick brown fox") should return "ehT kciuq nworb xof".


Write your code here


Q3. Implement a function findSmallestNumber that takes an array of integers as input and returns the smallest positive integer that is not present in the array. If all integers in the array are negative, the function should return 1.

For example, findSmallestNumber([-1, 3, 1, 4]) should return 2, because 2 is the smallest positive integer that is not present in the array. Similarly, findSmallestNumber([-1, -2, -3]) should return 1, because all integers in the array are negative.


Write your code here
