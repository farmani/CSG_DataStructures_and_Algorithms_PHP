# Speeding Up All The Things With Binary Search Trees

- As we’ve seen, even the fastest algorithms take O(N log N) time. So, if we are going to want our data sorted often, it would be sensible to always keep our data in sorted order in the first place so that we never need to resort it.
- When it comes to insertions and deletions, ordered arrays are relatively slow. Whenever a value is inserted into an ordered array, we first shift all greater values one cell to the right.
- A tree is also a node-based data structure, but within a tree, each node can have links to multiple nodes.
- 
## Tree
- The uppermost node (in our example, the “j”) is called the root.
- As in a family tree, a node can have descendants and ancestors.
- Trees are said to have levels. Each level is a row within the tree.
- One property of a tree is how balanced it is. A tree is balanced when its nodes’ subtrees have the same number of nodes in it.
- The following tree, on the other hand, is imbalanced

## Binary Search Trees
- A binary tree is a tree in which each node has zero, one, or two children.
- A binary search tree is a binary tree that also abides by the following rules:
  - Each node can have at most one “left” child and one “right” child.
  - A node’s “left” descendants can only contain values that are less than the node itself. Likewise, a node’s “right” descendants can only contain values
    that are greater than the node itself.
- It’s a binary tree because each node has zero, one, or two children. But it’s not a binary search tree because the root node has two “left” children. That is, it has two children than are less than it. For a binary search tree to be valid, it can have at most one left (lesser) child and one right (greater) child.

### Searching
- The algorithm for searching within a binary search tree is as follows:
1. Designate a node to be the “current node.” (At the beginning of the algo- rithm, the root node is the first “current node.”)
2. Inspect the value at the current node.
3. If we’ve found the value we’re looking for, great!
4. If the value we’re looking for is less than the current node, search for it in its left subtree.
5. If the value we’re looking for is greater than the current node, search for it in its right subtree.
6. Repeat Steps 1 through 5 until we find the value we’re searching for, or until we hit the bottom of the tree, in which case our value must not be in the tree.

#### The Efficiency of Searching a Binary Search Tree
- each step eliminates half of the remaining nodes from our search.
- We’d say, then, that searching in a binary search tree is O(log N), which is the apt description for any algorithm that eliminates half of the remaining values with each step. (We’ll see soon, though, that this is only for a perfectly balanced binary search tree, which is a best-case scenario.)
- if there are N nodes in a balanced binary tree, there will be about log(N) levels (that is, rows).
- each time we add a new full level to the tree, we end up roughly doubling the number of nodes that the tree has.
- searching a binary search tree has the same efficiency as binary search within an ordered array.
- Where binary search trees really shine over ordered arrays, though, is with insertion.
- recursion is key when dealing with data structures that have an arbitrary number of levels of depth. A tree is such a data structure, as it can have an infinite number of levels.

### Insertion
- Insertion always takes just one extra step beyond a search, which means insertion takes (log N) + 1 steps. In Big O Notation, which ignores constants, this is O(log N).
- In an ordered array, by contrast, insertion takes O(N), because in addition to search, we must shift a lot of data to the right to make room for the value we’re inserting.
- binary search trees have O(log N) search and O(log N) insertion. This becomes critical in an application in which you anticipate a lot of changes to your data.
- It is important to note that only when creating a tree out of randomly sorted data do trees usually wind up being well-balanced. However, if we insert sorted data into a tree, it can become imbalanced and less efficient.
- Only with a balanced tree does search take O(log N).
- Because of this, if you ever want to convert an ordered array into a binary search tree, you’d better first randomize the order of the data.
- when a tree is completely imbalanced, search is O(N). In a best-case scenario, when it is perfectly balanced, search is O(log N).

- How does the computer find the successor node?
  - Visit the right child of the deleted value, and then keep on visiting the left child of each subsequent child until there are no more left children. The bottom value is the successor node.

#### Successor Node with a Right Child
- However, there is one case we haven’t accounted for yet, and that’s where the successor node has a right child of its own.
  - If the successor node has a right child, after plugging the successor node into the spot of the deleted node, take the former right child of the successor node and turn it into the left child of the former parent of the successor node.

### Deletion Algorithm
- If the node being deleted has no children, simply delete it.
- If the node being deleted has one child, delete the node and plug the child into the spot where the deleted node was.
- When deleting a node with two children, replace the deleted node with the successor node. The successor node is the child node whose value is the least of all values that are greater than the deleted node.
- To find the successor node: visit the right child of the deleted value, and then keep on visiting the left child of each subsequent child until there are no more left children. The bottom value is the successor node.
- If the successor node has a right child, after plugging the successor node into the spot of the deleted node, take the former right child of the successor node and turn it into the left child of the former parent of the suc- cessor node.

### Binary Search Tree Traversal
- Visiting nodes is just another term for accessing them. The process of visiting every node in a data structure is known as traversing the data structure.
- Recursion is a great tool for performing traversal.
1. Call itself (traverse) recursively on the node’s left child. The function will keep getting called until we hit a node that does not have a left child.
2. “Visit” the node. (For our book title app, we print the value of the node at this step.)
3. Call itself (traverse) recursively on the node’s right child. The function will keep getting called until we hit a node that does not have a right child.

- Note that tree traversal is O(N), since by definition, traversal visits all N nodes of the tree.
