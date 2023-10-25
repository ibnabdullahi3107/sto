import sys
import numpy as np

def get_correlation(age_data, viral_load_data):
    correlation_matrix = np.corrcoef(age_data, viral_load_data)
    correlation_coefficient = correlation_matrix[0, 1]
    return correlation_coefficient

if __name__ == "__main__":
    args = sys.argv[1:]
    data = [float(arg) for arg in args]
    n = len(data)
    age_data = data[:n // 2]
    viral_load_data = data[n // 2:]
    correlation = get_correlation(age_data, viral_load_data)
    print(correlation)
