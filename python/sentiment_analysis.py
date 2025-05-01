#!/usr/bin/env python3
import sys
import json
from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer


def analyze(text):
    analyzer = SentimentIntensityAnalyzer()
    vs = analyzer.polarity_scores(text)
    return "positive" if vs['compound'] >= 0.05 else "negative" if vs['compound'] <= -0.05 else "neutral"


if __name__ == "__main__":
    try:
        # Read input
        text = sys.argv[1] if len(sys.argv) > 1 else sys.stdin.read().strip()

        if not text:
            raise ValueError("Empty input")

        # Ensure consistent output format
        result = {"sentiment": analyze(text)}
        print(json.dumps(result))

    except Exception as e:
        # Error handling that matches Symfony's expected format
        error_result = {
            "error": str(e),
            "sentiment": "unknown"
        }
        print(json.dumps(error_result))
        sys.exit(1)
