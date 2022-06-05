# Node Based Data Structures
- As you’ll see shortly, nodes are pieces of data that may be dispersed throughout the computer’s memory. Node-based data structures offer new ways to organize and access data that provide a number of major performance advantages.

## Linked List
- inked list is a data structure that represents a list of items.
- Instead of being a contiguous block of memory, the data from linked lists can be scattered across different cells throughout the computer’s memory.
- Connected data that is dispersed throughout memory are known as nodes. In a linked list, each node represents one item in the list.
- each node also comes with a little extra information, namely, the memory address of the next node in the list.
- This extra piece of data—this pointer to the next node’s memory address—is known as a link.
- we have a linked list that contains four pieces of data: "a", "b", "c", and "d". However, it uses eight cells of memory to store this data, because each node consists of two memory cells. The first cell holds the actual data, while the second cell serves as a link that indicates where in memory the next node begins. The final node’s link contains null since the linked list ends there. (A linked list’s first node can also be referred to as its head, and its final node as its tail.)
- The fact that a linked list’s data can be spread throughout the computer’s memory is a potential advantage it has over the array.
- when dealing with a linked list, we only have immediate access to its first node.
- To get to any node, then, we always need to start with the first node (the only node we initially have access to), and follow the chain of nodes until we reach the node we want.
- Linked lists having a worst-case read of O(N) is a major disadvantage when compared with arrays that can read any element in just O(1).
- Linked lists also have a search speed of O(N). To search for a value, we need go through a similar process as we did with reading.
- Insertion is one operation in which linked lists have a distinct advantage over arrays in certain situations.
- With linked lists, however, insertion at the beginning of the list takes just one step—which is O(1).
- inserting into a linked list is O(N), as the worst- case scenario of inserting at the end of the list will take N + 1 steps.
- Interestingly, our analysis shows that the best- and worst-case scenarios for arrays and linked lists are the opposite of one another. The following table breaks this all down:
    
| Scenario            | Array        | Linked List  |
|---------------------|--------------|--------------|
| Insert at beginning | Worst case   | Best case    |
| Insert at middle    | Average case | Average case |
| Insert at end       | Best case    | Worst case   |

- Contrast this with an array in which deleting the first element means shifting all remaining data one cell to the left, which takes O(N) time.
- When it comes to deleting the final node of a linked list, the actual deletion takes one step—we just take the second-to-last node and make its link null. However, it takes N steps to even access the second-to-last node in the first place, since we need to start at the beginning of the list and follow the links until we reach it.
- The following table contrasts the various scenarios of deletion for both arrays and linked lists. Note how it’s identical to insertion:

| Scenario            | Array        | Linked List  |
|---------------------|--------------|--------------|
| Delete at beginning | Worst case   | Best case    |
| Delete at middle    | Average case | Average case |
| Delete at end       | Best case    | Worst case   |

- It’s interesting to note that whenever we delete a node from our linked list, the node still exists in memory somewhere. We’re just removing the node from our list by ensuring that no other node from the list links to it. This has the effect of deleting the node from our list, even if the node still exists in memory.
- Different programming languages handle these deleted nodes in various ways. Some will automatically detect that they’re not being used and will “garbage collect” them, freeing up memory.

### Efficiency of Linked List Operations

| Scenario  | Array              | Linked List              |
|-----------|--------------------|--------------------------|
| Reading   | O(1)               | O(N)                     |
| Search    | O(N)               | O(N)                     |
| Insertion | O(N) (O(1) at end) | O(N) (O(1) at beginning) |
| Deletion  | O(N) (O(1) at end) | O(N) (O(1) at beginning) |

- The key to unlocking the linked list’s power is in the fact that the actual insertion and deletion steps are just O(1).
- One case where linked lists shine is when we examine a single list and delete many elements from it.
- With an array, each time we delete an email address, we need another O(N) steps to shift the remaining data to the left to close the gap. All this shifting will happen before we can even inspect the next email address.
- With a linked list, however, as we comb through the list, each deletion takes just one step, as we can simply change a node’s link to point to the appropriate node and move on.
- It turns out, then, that linked lists are an amazing data structure for moving through an entire list while making insertions or deletions, as we never have to worry about shifting other data as we make an insertion or deletion.
- A doubly linked list is like a linked list except that each node has two links—one that points to the next node, and another that points to the previous node. In addition, the doubly linked list always keeps track of both the first and last nodes, instead of just the first node.
- Since a doubly linked list always knows where both its first and last nodes are, we can access each of them in a single step, or O(1). So, just as we can read, insert, or delete from the beginning of the list in O(1), we can do the same from the end of the list in O(1) as well.
- A doubly linked list allows for a lot more flexibility, as we can move both for- ward and backward through the list. In fact, we can even start with the last node and work our way backward to the first node.
### Queues as Doubly Linked Lists
- Because doubly linked lists can insert data at the end in O(1) time and delete data from the front in O(1) time, they make the perfect underlying data structure for a queue.
- since queues insert at the end and delete from the beginning, arrays are only so good as the underlying data structure. While arrays are O(1) for insertions at the end, they’re O(N) for deleting from the beginning.
- A doubly linked list, on the other hand, is O(1) for both inserting at the end and for deleting from the beginning. That’s what makes it a perfect fit for serving as the queue’s underlying data structure.
