# Dynamic programming
- When we increase the data by one, we roughly double the number of steps the algorithm takes.
- this is the pattern of O(2^N)
- The improved version of the max function, however, only calls max for as many elements as there are inside the array. This means that our second max function has an efficiency of O(N).
- avoiding extra recursive calls is key to keeping recursion fast.
- This is a case of what computer scientists call overlapping subproblems.
- When a problem is solved by solving smaller versions of the same problem, the smaller problem is called a subproblem.
- What makes these subproblems overlapping, though, is the fact that fib(n - 2) and fib(n - 1) end up calling many of the same functions as each other.

### Dynamic Programming through Memoization
- Dynamic programming is the process of optimizing recursive problems that have overlapping subproblems.
- Optimizing an algorithm with dynamic programming is typically accomplished with one of two techniques. 
- The first technique is something called memoization. And no, that’s not a typo. Pronounced meh-moe-ih-ZAY-shun, memoization is a simple, but brilliant technique for reducing recursive calls in cases of overlapping subproblems. 
- Essentially, memoization reduces recursive calls by remembering previously computed functions.
- How does each recursive function get access to this hash table? 
- The answer is: we pass the hash table as a second parameter to the function.
### Dynamic Programming through Going Bottom-Up
- The second technique, known as going bottom-up, is a lot less fancy and may not even seem like a technique at all. All going bottom-up means is to ditch recursion and use some other approach (like a loop) to solve the same problem.
- dynamic programming means taking a problem that could be solved recursively and ensure that it doesn’t make duplicate calls for overlapping subproblems. Using iteration (that is, loops) instead of recursion is, technically, a way to achieve this.

### Memoization vs. Bottom-Up
- Is one technique better than the other? 
- Usually, it depends on the problem and why you’re using recursion in the first place. If recursion presents an elegant and intuitive solution to a given problem, you may want to stick with it and use memoization to deal with any overlapping subproblems. However, if the iterative approach is equally intuitive, you may want to go with that.
- Generally speaking, going bottom-up is often the better choice unless the recursive solution is more intuitive. Where recursion is more intuitive, you can keep the recursion and keep it fast by using memoization.
