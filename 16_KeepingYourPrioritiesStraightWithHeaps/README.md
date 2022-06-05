# Keeping Your Priorities Straight with Heaps
- there are many other types of trees as well. Like all data structures, each type of tree comes with its own benefits and drawbacks, and the trick is knowing which one to harness in a specific situation.
- when we want to constantly keep tabs on the greatest or least data element in a dataset.
- A priority queue is a list whose deletions and access are just like a classic queue, but whose insertions are like an ordered array.
- we always make sure the data remains sorted in a specific order.
- that deleting from the front of an array is O(N), since we have to shift all the data over to fill the gap created at index 0. However, we’ve cleverly tweaked our implementation so that we consider the end of array to be the front of the priority queue. This way, we’re always deleting from the end of the array, which is O(1).

## Heap
- The binary heap is a specific kind of binary tree. As a reminder, a binary tree is a tree where each node has a maximum of two child nodes.
- Going forward, I’m going to refer to this data structure simply as a heap, even though we’re specifically working with a binary max-heap.
- The heap is a binary tree that maintains the following conditions:
  - The value of each node must be greater than each of its descendant nodes.
    This rule is known as the heap condition.
  - The tree must be complete. (I’ll explain the meaning of this shortly.)
### The Heap Condition
- We can also construct a heap that has the opposite heap condition, which is each node must contain a smaller value than any of its descendants. Such a heap is known as the min-heap.
- A complete tree is a tree that is completely filled with nodes; no nodes are missing. So, if you read each level of the tree from left to right, all of the nodes are there. However, the bottom row can have empty positions, as long as there aren’t any nodes to the right of these empty positions.
- A heap, then, is a tree that meets the heap condition and is also complete.
### Heap Properties
- Because of this, heaps are said to be weakly ordered as compared to binary search trees. While heaps have some order, as descendants cannot be greater than their ancestors, this isn’t enough order to make heaps worth searching through.
- searching within a heap would require us to inspect each node, so search is not an operation usually implemented in the context of heaps.
- The heap has something called a last node. A heap’s last node is the rightmost node in its bottom level.
### Heap Insertion
1. We create a node containing the new value and insert it at the next available rightmost spot in the bottom level. Thus, this value becomes the heap’s last node.
2. Next, we compare this new node with its parent node.
3. If the new node is greater than its parent node, we swap the new node with the parent node.
4. We repeat Step 3, effectively moving the new node up through the heap, until it has a parent whose value is greater than it.
- This process of moving the new node up the heap, is called trickling the node up through the heap. Sometimes it moves up to the right, and sometimes it moves up to the left, but it always moves up until it settles into the correct position. 
- The efficiency of inserting into a heap is O(log N). As you saw in the previous chapter, for N nodes in any binary tree, the tree is organized into about log(N) rows. Since at most we’d have to trickle the new value up to the top row, this will take log(N) steps at most.
### Heap Deletion
The first thing to know about deleting a value from a heap is that we only ever delete the root node. This is right in line with the way a priority queue works, in that we only access and remove the highest-priority item.
The algorithm for deleting the root node of a heap is as follows:
1. Move the last node into where the root node was, effectively removing the original root node.
2. Trickle the root node down into its proper place. I’ll explain how trickling down works shortly.
- Trickling down is a tad more complex than trickling up, since each time we trickle a node down, we have two possible directions as to where we will trickle it down. That is, we can either swap it with its left child or its right child. (When trickling up, on the other hand, each node has only one parent to swap with.)
1. We check both children of the trickle node and see which one is larger.
2. If the trickle node is smaller than the larger of the two child nodes, we swap the trickle node with that larger child.
3. We repeat Steps 1 and 2 until the trickle node has no children who are greater than it.
- Like insertion, the time complexity of deletion from a heap is O(log N), as we have to trickle a node from the root down through all log(N) levels of the heap.

### Heaps vs. Ordered Arrays

| Scenario  | Ordered Array | Heap      |
|-----------|---------------|-----------|
| Insertion | O(N)          | O(log N)  |
| Deletion  | O(1)          | O(log N)  |

- While O(1) is extremely fast, O(log N) is still very fast. And O(N), by comparison, is slow. With this in mind, we can rewrite the earlier table this way:

| Scenario  | Ordered Array   | Heap       |
|-----------|-----------------|------------|
| Insertion | Slow            | Very fast  |
| Deletion  | Extremely fast  | Very fast  |

- We’d rather use a data structure that is consistently very fast than a data structure that is sometimes extremely fast and sometimes slow.
- The reason why completeness is important is that because we want to ensure our heap remains well-balanced.
- the reason why this balance is so important is that because it’s what allows us to achieve O(log N) operations. In a severely imbalanced tree like the fol- lowing one, traversing it could take O(N) steps instead:

### Arrays as Heaps
- heaps are usually implemented using arrays.
- the heap itself can be an abstract data type that really uses an array under the hood.
- the reason why we’re using an array to implement the heap is because it solves the Problem of the Last Node. How? 
- When we implement the heap in this fashion, the last node will always be the final element of the array.
- Additionally, when we insert a new node into the heap, we do so at the end of the array in order to make it the last node.
- when we assign the indexes of the heap’s nodes according to the pattern described earlier, the following traits of a heap are always true:
  - To find the left child of any node, we can use the formula, (index * 2) + 1 
  - To find the right child of any node, we can use the formula, (index * 2) + 2

- To find a node’s parent, we can use the formula, (index - 1) / 2 
- Note that this formula uses integer division, meaning we throw away any numbers beyond the decimal point. For example, 3 / 2 is considered 1, rather than the more accurate 1.5.
- it is possible to implement a heap using linked nodes as well. (This alternative implementation uses a different trick to solve the Problem of the Last Node, one that involves binary numbers.)
- However, the array implementation is the more common approach, so that is what I presented here. It’s also really interesting to see how an array can be used to implement a tree.

### Heaps as Priority Queues
- It turns out that the heap’s weak ordering is its very advantage. The fact that it doesn’t have to be perfectly ordered allows us to insert new values in O(log N) time. At the same time, the heap is ordered just enough so that we can always access the one item we need at any given time—the heap’s greatest value.
