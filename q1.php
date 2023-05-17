<?php
class TreeNode
{
    public $val;
    public $left;
    public $right;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

function largerSubtree($root)
{
    if(!$root) return 'none';
    
    $left = countChilds($root->left);
    $right = countChilds($root->right);

    if ($left > $right) return 'left';
    else if ($left < $right) return 'right';
    else  return 'none';
}
function countChilds($node)
{
    if (!$node) {
        return 0;
    } else {
        return countChilds($node->left) + countChilds($node->right) + 1;
    }
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);
$root->right->left = new TreeNode(6);
$root->right->right = new TreeNode(7);

// should output "right"
echo largerSubtree($root) . " \n" . ' 1 ';

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);

// should output "none"
echo largerSubtree($root) . " \n" . ' 2 ';

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->left->left = new TreeNode(4);

// should output "left"
echo largerSubtree($root) . " \n" . ' 3 ';
