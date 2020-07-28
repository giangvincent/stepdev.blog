# Make the legacy code greate again

## What is the legacy code? Or when do we call some code or part of code is legacy?
- That code or part of code is not documented.
- Part of them used old or unsupported technology.
- You wrote that just to make it worked and not tested at all.
- You inherited that code from someone who wrote it with ignorance and in hurry.

## Why is legacy code existed in the first time?
- Technical debt
- Forgotten technology
- ignorance

## Fixing legacy codes
Use this loop:
1. Refactor
2. Unit test
3. Approve

## What is refactoring ?
Is a control technique for improving the design on an existin code base.

## Why should we refactor?
- To understand the logic of the code base. What it did, input, output. And then you can make it readable with clean code principles. To change the code without break it logic. It might take long time first but then you can change it in a short of time.
- To improve the performance of the program. Make it more efficient. When fixing legacy code you should not focus on performance. Only focus on it when client require it.
- Refactor when you need to improve or add more functionality.
- Refactor when you need to change or improve technology.

## Unit test
- Prevents regressions
- Verification
- Documentation

## Approval testing
- Compare both features with legacy code and refactor code.
- Assert new test
- Lets the client approve

## What are results after refactor ? 
- Have cleaner structure
- Longer code or Shorter code but not change the logic of code base.
- In the future, others can easy implement new functions
- Easy documentation to understand