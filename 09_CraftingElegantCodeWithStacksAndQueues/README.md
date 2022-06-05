# Crafting Elegant Code With Stacks And Queues

## Stacks
- A stack stores data in the same way arrays do—it’s simply a list of elements. The one catch is that stacks have the following three constraints:
  - Data can be inserted only at the end of a stack.
  - Data can be deleted only from the end of a stack.
  - Only the last element of a stack can be read.
- most computer science literature refers to the end of the stack as its top, and the beginning of the stack as its bottom.
- Removing elements from the top of the stack is called popping from the stack. Because of a stack’s restrictions, we can only pop data from the top.
- A handy acronym used to describe stack operations is LIFO, which stands for “Last In, First Out.” All this means is that the last item pushed onto a stack is always the first item popped from it. It’s sort of like students who slack off—they’re always the last to arrive to class, but the first to leave.

### Abstract Data Types
- In fact, a stack doesn’t even care about what data structure is under the hood. All it cares about is that there’s a list of data elements that act in a LIFO way. Whether we accomplish this with an array or some other type of built-in data structure doesn’t actually matter. Because of this, the stack is an example of what is known as an abstract data type—it’s a kind of data structure that is a set of theoretical rules that revolve around some other built-in data structure.
- The set itself, though, is simply a theoretical concept: it’s a list of non-duplicated data elements.
- It should be noted that even a built-in data structure can be an abstract data type. Even if a programming language does implement its own Stack class, it doesn’t change the fact that the stack data structure is still a concept that allows for various data structures to be used under the hood.
- Constrained data structures like the stack (and the queue, which we’ll encounter shortly) are important for several reasons. 
  - First, when we work with a constrained data structure, we can prevent potential bugs.
  - Second, data structures like stacks give us a new mental model for tackling problems.
- As soon as someone sees a stack being used within an algorithm, they immediately know that the algorithm is working with a LIFO-based process.

## Queues
- That’s why computer scientists apply the acronym “FIFO” to queues: First In, First Out.
- a queue is usually depicted horizontally. It’s also common to refer to the beginning of the queue as its front, and the end of the queue as its back.
- queues are arrays with three restrictions (it’s just a different set of restrictions):
  - Data can be inserted only at the end of a queue. (This is identical behavior to the stack.)
  - Data can be deleted only from the front of a queue. (This is the opposite behavior of the stack.)
  - Only the element at the front of a queue can be read. (This, too, is the opposite of behavior of the stack.)
- a common term for inserting into a queue is enqueue, but we’ll use the terms insert and enqueue interchangeably
- Removing an element from a queue is also known as dequeuing.
