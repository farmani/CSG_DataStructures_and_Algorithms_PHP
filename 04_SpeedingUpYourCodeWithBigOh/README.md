# Speeding up your code with Big Oh

## Bubble Sort
- The actual reason why this algorithm is called Bubble Sort: in each pass-through, the highest unsorted value “bubbles” up to its correct position.
- Because for N values, Bubble Sort takes N^2 steps, in Big O, we say that Bubble Sort has an efficiency of O(N^2).
- O(N^2) is considered to be a relatively inefficient algorithm, since as the data increases, the steps increase dramatically.
- O(N2) is also referred to as quadratic time.
- Very often (but not always), when an algorithm nests one loop inside another, the algorithm is O(N2). So, whenever you see a nested loop, O(N2) alarm bells should go off in your head.
