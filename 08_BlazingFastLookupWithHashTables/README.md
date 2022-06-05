# Blazing fast Lookup with Hash Tables

- searching for the price of a given food would take O(N) steps since the computer would have to perform a linear search. If it’s an ordered array, the computer could do a binary search, which would take O(log N).
- how to use a special data structure called a hash table, which can be used to look up data in just O(1) time.

## Hash Table
- Other names include hashes, maps, hash maps, dictionaries, and associative arrays.
- Looking up a value in a hash table has an efficiency of O(1) on average, as it usually takes just one step. Let’s see why.
- a hash function needs to meet only one criterion to be valid: a hash function must convert the same string to the same number every single time it’s applied. If the hash function can return inconsistent results for a given string, it’s not valid.
- If we tried to find a particular value without knowing its key, we’d still have to resort to searching each and every key-value pair within the hash table, which is O(N).
- If, on the other hand, we want to use a value to find its associated key, we cannot take advantage of the hash table’s fast lookup ability.
- One classic approach for handling collisions is known as separate chaining. When a collision occurs, instead of placing a single value in the cell, it places in it a reference to an array.
- If somehow all of our data ended up within a single cell of our hash table, our hash table would be no better than an array. So, it actually turns out that the worst-case performance for a hash table lookup is O(N). 
- Because of this, it is critical that a hash table is designed in such a way that it will have few collisions, and therefore, typically perform lookups in O(1) time rather than O(N) time.

### Making an Efficient Hash Table
- a hash table’s efficiency depends on three factors:
  - How much data we’re storing in the hash table
  - How many cells are available in the hash table
  - Which hash function we’re using

- It makes sense why the first two factors are important. If you have a lot of data and only a few cells, there will be many collisions and the hash table will lose its efficiency. Let’s explore, however, why the hash function itself is important for efficiency.
- A good hash function, therefore, is one that distributes its data across all available cells. The more we can spread out our data, the fewer collisions we will have.
- the best way to avoid collisions would be to have a hash table with a large number of cells. Imagine we want to store just five items in our hash table.
- while avoiding collisions is important, we have to balance that with avoiding memory hogging as well.
- A good hash table strikes a balance of avoiding collisions while not consuming lots of memory.
- computer scientists have developed the following rule of thumb: for every 7 data elements stored in a hash table, it should have 10 cells.
- This ratio of data to cells is called the load factor. Using this terminology, we’d say that the ideal load factor is 0.7 (7 elements / 10 cells).
- Hash tables are such a natural fit for paired data that we can even use them to simplify conditional logic in certain instances.

