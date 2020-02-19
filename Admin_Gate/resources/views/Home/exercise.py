import sys
A = [64, 25, 16, 12, 6]
for i in range(len(A)):
	min_idx = i;
	print(min_idx);
	for j in range(i+1, len(A)):
		if A[min_idx]>A[j]:
			min_idx = j;
