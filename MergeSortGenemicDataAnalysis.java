public class MergeSortGenemicDataAnalysis {
    public static void main(String[] args) {
        // Example usage of Merge Sort
        String[] arr = { "ATCGAT", "GCCTTA", "AAGGTC", "TTTGCG", "CCCAAA", "GGGGGG" };
        System.out.println("Original Array:");
        printArray(arr);
        mergeSort(arr, 0, arr.length - 1);
        System.out.println("\nSorted Array:");
        printArray(arr);
    }

    // Helper function to print array elements
    public static void printArray(String[] arr) {
        for (String str : arr) {
            System.out.print(str + " ");
        }
        System.out.println();
    }

    // Merge Sort function
    public static void mergeSort(String[] arr, int left, int right) {
        // Recursive function to perform Merge Sort on the input array
        if (left < right) {
            int mid = left + (right - left) / 2;
            mergeSort(arr, left, mid); // Sort the left subarray
            mergeSort(arr, mid + 1, right); // Sort the right subarray
            merge(arr, left, mid, right); // Merge the sorted subarrays
        }
    }

    // Helper function to merge two sorted subarrays
    private static void merge(String[] arr, int left, int mid, int right) {
        int n1 = mid - left + 1;
        int n2 = right - mid;
        String[] L = new String[n1];
        String[] R = new String[n2];

        // Copy data to temporary arrays L[] and R[]
        for (int i = 0; i < n1; ++i)
            L[i] = arr[left + i];
        for (int j = 0; j < n2; ++j)
            R[j] = arr[mid + 1 + j];

        int i = 0, j = 0, k = left;

        // Merge the temporary arrays back into arr[left..right]
        while (i < n1 && j < n2) {
            if (L[i].compareTo(R[j]) <= 0) {
                arr[k] = L[i];
                i++;
            } else {
                arr[k] = R[j];
                j++;
            }
            k++;
        }

        // Copy remaining elements of L[] if any
        while (i < n1) {
            arr[k] = L[i];
            i++;
            k++;
        }

        // Copy remaining elements of R[] if any
        while (j < n2) {
            arr[k] = R[j];
            j++;
            k++;
        }
    }
}