# Recursively Recurse With Recursion
- Recursion is the term for a function calling itself.
- In recursion terminology, the case in which our function will not recurse is known as the base case.
- every recursive function needs at least one base case to prevent it from calling itself indefinitely.

## Reading Recursive Code
- To walk through the code to see what it does, here’s the process I recommend:
  1. Identify the base case.
  2. Walk through the function for the base case.
  3. Identify the “next-to-last” case. This is the case just before the base case, as I’ll demonstrate momentarily.
  4. Walk through the function for the “next-to-last” case.
  5. Repeat this process by identifying the case before the one you just analyzed, and walking through the function for that case.
- this is the case in which the function does not call itself, 1 is the base case.
- As you can see, starting the analysis from the base case and building up is a great way to reason about recursive code.
