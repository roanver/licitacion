<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.ico') }}">
    @vite('resources/css/app.css')
    <title>Cargar archivo</title>
</head>
<body>
  <nav class="p-5 bg-white shadow flex intems-center justify-between">
    <div>
    <span class="text-2xl">
      <a href="{{route('users')}}"><svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="217" height="72" viewBox="0 0 217 72" fill="none"><path d="M96.892 35.212H86.884L85.228 40H79.936L88.972 14.836H94.84L103.876 40H98.548L96.892 35.212ZM95.524 31.18L91.888 20.668L88.252 31.18H95.524ZM112.294 22.936C112.942 22.024 113.83 21.268 114.958 20.668C116.11 20.044 117.418 19.732 118.882 19.732C120.586 19.732 122.122 20.152 123.49 20.992C124.882 21.832 125.974 23.032 126.766 24.592C127.582 26.128 127.99 27.916 127.99 29.956C127.99 31.996 127.582 33.808 126.766 35.392C125.974 36.952 124.882 38.164 123.49 39.028C122.122 39.892 120.586 40.324 118.882 40.324C117.418 40.324 116.122 40.024 114.994 39.424C113.89 38.824 112.99 38.068 112.294 37.156V49.504H107.254V20.056H112.294V22.936ZM122.842 29.956C122.842 28.756 122.59 27.724 122.086 26.86C121.606 25.972 120.958 25.3 120.142 24.844C119.35 24.388 118.486 24.16 117.55 24.16C116.638 24.16 115.774 24.4 114.958 24.88C114.166 25.336 113.518 26.008 113.014 26.896C112.534 27.784 112.294 28.828 112.294 30.028C112.294 31.228 112.534 32.272 113.014 33.16C113.518 34.048 114.166 34.732 114.958 35.212C115.774 35.668 116.638 35.896 117.55 35.896C118.486 35.896 119.35 35.656 120.142 35.176C120.958 34.696 121.606 34.012 122.086 33.124C122.59 32.236 122.842 31.18 122.842 29.956ZM142.884 19.768C144.396 19.768 145.74 20.104 146.916 20.776C148.092 21.424 149.004 22.396 149.652 23.692C150.324 24.964 150.66 26.5 150.66 28.3V40H145.62V28.984C145.62 27.4 145.224 26.188 144.432 25.348C143.64 24.484 142.56 24.052 141.192 24.052C139.8 24.052 138.696 24.484 137.88 25.348C137.088 26.188 136.692 27.4 136.692 28.984V40H131.652V13.36H136.692V22.54C137.34 21.676 138.204 21.004 139.284 20.524C140.364 20.02 141.564 19.768 142.884 19.768ZM158.009 17.68C157.121 17.68 156.377 17.404 155.777 16.852C155.201 16.276 154.913 15.568 154.913 14.728C154.913 13.888 155.201 13.192 155.777 12.64C156.377 12.064 157.121 11.776 158.009 11.776C158.897 11.776 159.629 12.064 160.205 12.64C160.805 13.192 161.105 13.888 161.105 14.728C161.105 15.568 160.805 16.276 160.205 16.852C159.629 17.404 158.897 17.68 158.009 17.68ZM160.493 20.056V40H155.453V20.056H160.493ZM176.488 40L172.384 33.808L168.748 40H163.348L169.864 29.992L163.276 20.056H168.964L173.032 26.212L176.704 20.056H182.104L175.552 29.992L182.176 40H176.488Z" fill="#2D3748"/><path d="M82.528 58.636C83.44 58.636 84.228 58.808 84.892 59.152C85.564 59.488 86.076 59.972 86.428 60.604C86.788 61.236 86.968 61.98 86.968 62.836C86.968 63.692 86.788 64.436 86.428 65.068C86.076 65.692 85.564 66.172 84.892 66.508C84.228 66.836 83.44 67 82.528 67H79.924V58.636H82.528ZM82.528 66.1C83.608 66.1 84.432 65.816 85 65.248C85.568 64.672 85.852 63.868 85.852 62.836C85.852 61.796 85.564 60.984 84.988 60.4C84.42 59.816 83.6 59.524 82.528 59.524H81.016V66.1H82.528ZM94.4084 63.46C94.4084 63.668 94.3964 63.888 94.3724 64.12H89.1164C89.1564 64.768 89.3764 65.276 89.7764 65.644C90.1844 66.004 90.6764 66.184 91.2524 66.184C91.7244 66.184 92.1164 66.076 92.4284 65.86C92.7484 65.636 92.9724 65.34 93.1004 64.972H94.2764C94.1004 65.604 93.7484 66.12 93.2204 66.52C92.6924 66.912 92.0364 67.108 91.2524 67.108C90.6284 67.108 90.0684 66.968 89.5724 66.688C89.0844 66.408 88.7004 66.012 88.4204 65.5C88.1404 64.98 88.0004 64.38 88.0004 63.7C88.0004 63.02 88.1364 62.424 88.4084 61.912C88.6804 61.4 89.0604 61.008 89.5484 60.736C90.0444 60.456 90.6124 60.316 91.2524 60.316C91.8764 60.316 92.4284 60.452 92.9084 60.724C93.3884 60.996 93.7564 61.372 94.0124 61.852C94.2764 62.324 94.4084 62.86 94.4084 63.46ZM93.2804 63.232C93.2804 62.816 93.1884 62.46 93.0044 62.164C92.8204 61.86 92.5684 61.632 92.2484 61.48C91.9364 61.32 91.5884 61.24 91.2044 61.24C90.6524 61.24 90.1804 61.416 89.7884 61.768C89.4044 62.12 89.1844 62.608 89.1284 63.232H93.2804ZM98.1778 67.108C97.6738 67.108 97.2218 67.024 96.8218 66.856C96.4218 66.68 96.1058 66.44 95.8738 66.136C95.6418 65.824 95.5138 65.468 95.4898 65.068H96.6178C96.6498 65.396 96.8018 65.664 97.0738 65.872C97.3538 66.08 97.7178 66.184 98.1658 66.184C98.5818 66.184 98.9098 66.092 99.1498 65.908C99.3898 65.724 99.5098 65.492 99.5098 65.212C99.5098 64.924 99.3818 64.712 99.1258 64.576C98.8698 64.432 98.4738 64.292 97.9378 64.156C97.4498 64.028 97.0498 63.9 96.7378 63.772C96.4338 63.636 96.1698 63.44 95.9458 63.184C95.7298 62.92 95.6218 62.576 95.6218 62.152C95.6218 61.816 95.7218 61.508 95.9218 61.228C96.1218 60.948 96.4058 60.728 96.7738 60.568C97.1418 60.4 97.5618 60.316 98.0338 60.316C98.7618 60.316 99.3498 60.5 99.7978 60.868C100.246 61.236 100.486 61.74 100.518 62.38H99.4258C99.4018 62.036 99.2618 61.76 99.0058 61.552C98.7578 61.344 98.4218 61.24 97.9978 61.24C97.6058 61.24 97.2938 61.324 97.0618 61.492C96.8298 61.66 96.7138 61.88 96.7138 62.152C96.7138 62.368 96.7818 62.548 96.9178 62.692C97.0618 62.828 97.2378 62.94 97.4458 63.028C97.6618 63.108 97.9578 63.2 98.3338 63.304C98.8058 63.432 99.1898 63.56 99.4858 63.688C99.7818 63.808 100.034 63.992 100.242 64.24C100.458 64.488 100.57 64.812 100.578 65.212C100.578 65.572 100.478 65.896 100.278 66.184C100.078 66.472 99.7938 66.7 99.4258 66.868C99.0658 67.028 98.6498 67.108 98.1778 67.108ZM101.711 63.688C101.711 63.016 101.847 62.428 102.119 61.924C102.391 61.412 102.763 61.016 103.235 60.736C103.715 60.456 104.247 60.316 104.831 60.316C105.407 60.316 105.907 60.44 106.331 60.688C106.755 60.936 107.071 61.248 107.279 61.624V60.424H108.383V67H107.279V65.776C107.063 66.16 106.739 66.48 106.307 66.736C105.883 66.984 105.387 67.108 104.819 67.108C104.235 67.108 103.707 66.964 103.235 66.676C102.763 66.388 102.391 65.984 102.119 65.464C101.847 64.944 101.711 64.352 101.711 63.688ZM107.279 63.7C107.279 63.204 107.179 62.772 106.979 62.404C106.779 62.036 106.507 61.756 106.163 61.564C105.827 61.364 105.455 61.264 105.047 61.264C104.639 61.264 104.267 61.36 103.931 61.552C103.595 61.744 103.327 62.024 103.127 62.392C102.927 62.76 102.827 63.192 102.827 63.688C102.827 64.192 102.927 64.632 103.127 65.008C103.327 65.376 103.595 65.66 103.931 65.86C104.267 66.052 104.639 66.148 105.047 66.148C105.455 66.148 105.827 66.052 106.163 65.86C106.507 65.66 106.779 65.376 106.979 65.008C107.179 64.632 107.279 64.196 107.279 63.7ZM111.321 61.492C111.513 61.116 111.785 60.824 112.137 60.616C112.497 60.408 112.933 60.304 113.445 60.304V61.432H113.157C111.933 61.432 111.321 62.096 111.321 63.424V67H110.229V60.424H111.321V61.492ZM115.797 61.492C115.989 61.116 116.261 60.824 116.613 60.616C116.973 60.408 117.409 60.304 117.921 60.304V61.432H117.633C116.409 61.432 115.797 62.096 115.797 63.424V67H114.705V60.424H115.797V61.492ZM122.05 67.108C121.434 67.108 120.874 66.968 120.37 66.688C119.874 66.408 119.482 66.012 119.194 65.5C118.914 64.98 118.774 64.38 118.774 63.7C118.774 63.028 118.918 62.436 119.206 61.924C119.502 61.404 119.902 61.008 120.406 60.736C120.91 60.456 121.474 60.316 122.098 60.316C122.722 60.316 123.286 60.456 123.79 60.736C124.294 61.008 124.69 61.4 124.978 61.912C125.274 62.424 125.422 63.02 125.422 63.7C125.422 64.38 125.27 64.98 124.966 65.5C124.67 66.012 124.266 66.408 123.754 66.688C123.242 66.968 122.674 67.108 122.05 67.108ZM122.05 66.148C122.442 66.148 122.81 66.056 123.154 65.872C123.498 65.688 123.774 65.412 123.982 65.044C124.198 64.676 124.306 64.228 124.306 63.7C124.306 63.172 124.202 62.724 123.994 62.356C123.786 61.988 123.514 61.716 123.178 61.54C122.842 61.356 122.478 61.264 122.086 61.264C121.686 61.264 121.318 61.356 120.982 61.54C120.654 61.716 120.39 61.988 120.19 62.356C119.99 62.724 119.89 63.172 119.89 63.7C119.89 64.236 119.986 64.688 120.178 65.056C120.378 65.424 120.642 65.7 120.97 65.884C121.298 66.06 121.658 66.148 122.05 66.148ZM127.95 58.12V67H126.858V58.12H127.95ZM130.903 58.12V67H129.811V58.12H130.903ZM138.764 63.46C138.764 63.668 138.752 63.888 138.728 64.12H133.472C133.512 64.768 133.732 65.276 134.132 65.644C134.54 66.004 135.032 66.184 135.608 66.184C136.08 66.184 136.472 66.076 136.784 65.86C137.104 65.636 137.328 65.34 137.456 64.972H138.632C138.456 65.604 138.104 66.12 137.576 66.52C137.048 66.912 136.392 67.108 135.608 67.108C134.984 67.108 134.424 66.968 133.928 66.688C133.44 66.408 133.056 66.012 132.776 65.5C132.496 64.98 132.356 64.38 132.356 63.7C132.356 63.02 132.492 62.424 132.764 61.912C133.036 61.4 133.416 61.008 133.904 60.736C134.4 60.456 134.968 60.316 135.608 60.316C136.232 60.316 136.784 60.452 137.264 60.724C137.744 60.996 138.112 61.372 138.368 61.852C138.632 62.324 138.764 62.86 138.764 63.46ZM137.636 63.232C137.636 62.816 137.544 62.46 137.36 62.164C137.176 61.86 136.924 61.632 136.604 61.48C136.292 61.32 135.944 61.24 135.56 61.24C135.008 61.24 134.536 61.416 134.144 61.768C133.76 62.12 133.54 62.608 133.484 63.232H137.636ZM148.113 60.304C148.625 60.304 149.081 60.412 149.481 60.628C149.881 60.836 150.197 61.152 150.429 61.576C150.661 62 150.777 62.516 150.777 63.124V67H149.697V63.28C149.697 62.624 149.533 62.124 149.205 61.78C148.885 61.428 148.449 61.252 147.897 61.252C147.329 61.252 146.877 61.436 146.541 61.804C146.205 62.164 146.037 62.688 146.037 63.376V67H144.957V63.28C144.957 62.624 144.793 62.124 144.465 61.78C144.145 61.428 143.709 61.252 143.157 61.252C142.589 61.252 142.137 61.436 141.801 61.804C141.465 62.164 141.297 62.688 141.297 63.376V67H140.205V60.424H141.297V61.372C141.513 61.028 141.801 60.764 142.161 60.58C142.529 60.396 142.933 60.304 143.373 60.304C143.925 60.304 144.413 60.428 144.837 60.676C145.261 60.924 145.577 61.288 145.785 61.768C145.969 61.304 146.273 60.944 146.697 60.688C147.121 60.432 147.593 60.304 148.113 60.304ZM155.437 67.108C154.821 67.108 154.261 66.968 153.757 66.688C153.261 66.408 152.869 66.012 152.581 65.5C152.301 64.98 152.161 64.38 152.161 63.7C152.161 63.028 152.305 62.436 152.593 61.924C152.889 61.404 153.289 61.008 153.793 60.736C154.297 60.456 154.861 60.316 155.485 60.316C156.109 60.316 156.673 60.456 157.177 60.736C157.681 61.008 158.077 61.4 158.365 61.912C158.661 62.424 158.809 63.02 158.809 63.7C158.809 64.38 158.657 64.98 158.353 65.5C158.057 66.012 157.653 66.408 157.141 66.688C156.629 66.968 156.061 67.108 155.437 67.108ZM155.437 66.148C155.829 66.148 156.197 66.056 156.541 65.872C156.885 65.688 157.161 65.412 157.369 65.044C157.585 64.676 157.693 64.228 157.693 63.7C157.693 63.172 157.589 62.724 157.381 62.356C157.173 61.988 156.901 61.716 156.565 61.54C156.229 61.356 155.865 61.264 155.473 61.264C155.073 61.264 154.705 61.356 154.369 61.54C154.041 61.716 153.777 61.988 153.577 62.356C153.377 62.724 153.277 63.172 153.277 63.7C153.277 64.236 153.373 64.688 153.565 65.056C153.765 65.424 154.029 65.7 154.357 65.884C154.685 66.06 155.045 66.148 155.437 66.148ZM162.572 67.108C162.068 67.108 161.616 67.024 161.216 66.856C160.816 66.68 160.5 66.44 160.268 66.136C160.036 65.824 159.908 65.468 159.884 65.068H161.012C161.044 65.396 161.196 65.664 161.468 65.872C161.748 66.08 162.112 66.184 162.56 66.184C162.976 66.184 163.304 66.092 163.544 65.908C163.784 65.724 163.904 65.492 163.904 65.212C163.904 64.924 163.776 64.712 163.52 64.576C163.264 64.432 162.868 64.292 162.332 64.156C161.844 64.028 161.444 63.9 161.132 63.772C160.828 63.636 160.564 63.44 160.34 63.184C160.124 62.92 160.016 62.576 160.016 62.152C160.016 61.816 160.116 61.508 160.316 61.228C160.516 60.948 160.8 60.728 161.168 60.568C161.536 60.4 161.956 60.316 162.428 60.316C163.156 60.316 163.744 60.5 164.192 60.868C164.64 61.236 164.88 61.74 164.912 62.38H163.82C163.796 62.036 163.656 61.76 163.4 61.552C163.152 61.344 162.816 61.24 162.392 61.24C162 61.24 161.688 61.324 161.456 61.492C161.224 61.66 161.108 61.88 161.108 62.152C161.108 62.368 161.176 62.548 161.312 62.692C161.456 62.828 161.632 62.94 161.84 63.028C162.056 63.108 162.352 63.2 162.728 63.304C163.2 63.432 163.584 63.56 163.88 63.688C164.176 63.808 164.428 63.992 164.636 64.24C164.852 64.488 164.964 64.812 164.972 65.212C164.972 65.572 164.872 65.896 164.672 66.184C164.472 66.472 164.188 66.7 163.82 66.868C163.46 67.028 163.044 67.108 162.572 67.108ZM170.301 59.356C170.093 59.356 169.917 59.284 169.773 59.14C169.637 58.996 169.569 58.82 169.569 58.612C169.569 58.404 169.637 58.228 169.773 58.084C169.917 57.94 170.093 57.868 170.301 57.868C170.509 57.868 170.681 57.94 170.817 58.084C170.961 58.228 171.033 58.404 171.033 58.612C171.033 58.82 170.961 58.996 170.817 59.14C170.681 59.284 170.509 59.356 170.301 59.356ZM170.841 68.428C170.841 69.012 170.693 69.44 170.397 69.712C170.101 69.984 169.669 70.12 169.101 70.12H168.465V69.196H168.921C169.225 69.196 169.437 69.136 169.557 69.016C169.685 68.896 169.749 68.692 169.749 68.404V60.424H170.841V68.428ZM178.522 60.424V67H177.43V66.028C177.222 66.364 176.93 66.628 176.554 66.82C176.186 67.004 175.778 67.096 175.33 67.096C174.818 67.096 174.358 66.992 173.95 66.784C173.542 66.568 173.218 66.248 172.978 65.824C172.746 65.4 172.63 64.884 172.63 64.276V60.424H173.71V64.132C173.71 64.78 173.874 65.28 174.202 65.632C174.53 65.976 174.978 66.148 175.546 66.148C176.13 66.148 176.59 65.968 176.926 65.608C177.262 65.248 177.43 64.724 177.43 64.036V60.424H178.522ZM183.569 60.304C184.369 60.304 185.017 60.548 185.513 61.036C186.009 61.516 186.257 62.212 186.257 63.124V67H185.177V63.28C185.177 62.624 185.013 62.124 184.685 61.78C184.357 61.428 183.909 61.252 183.341 61.252C182.765 61.252 182.305 61.432 181.961 61.792C181.625 62.152 181.457 62.676 181.457 63.364V67H180.365V60.424H181.457V61.36C181.673 61.024 181.965 60.764 182.333 60.58C182.709 60.396 183.121 60.304 183.569 60.304ZM189.373 61.324V65.2C189.373 65.52 189.441 65.748 189.577 65.884C189.713 66.012 189.949 66.076 190.285 66.076H191.089V67H190.105C189.497 67 189.041 66.86 188.737 66.58C188.433 66.3 188.281 65.84 188.281 65.2V61.324H187.429V60.424H188.281V58.768H189.373V60.424H191.089V61.324H189.373ZM195.28 67.108C194.664 67.108 194.104 66.968 193.6 66.688C193.104 66.408 192.712 66.012 192.424 65.5C192.144 64.98 192.004 64.38 192.004 63.7C192.004 63.028 192.148 62.436 192.436 61.924C192.732 61.404 193.132 61.008 193.636 60.736C194.14 60.456 194.704 60.316 195.328 60.316C195.952 60.316 196.516 60.456 197.02 60.736C197.524 61.008 197.92 61.4 198.208 61.912C198.504 62.424 198.652 63.02 198.652 63.7C198.652 64.38 198.5 64.98 198.196 65.5C197.9 66.012 197.496 66.408 196.984 66.688C196.472 66.968 195.904 67.108 195.28 67.108ZM195.28 66.148C195.672 66.148 196.04 66.056 196.384 65.872C196.728 65.688 197.004 65.412 197.212 65.044C197.428 64.676 197.536 64.228 197.536 63.7C197.536 63.172 197.432 62.724 197.224 62.356C197.016 61.988 196.744 61.716 196.408 61.54C196.072 61.356 195.708 61.264 195.316 61.264C194.916 61.264 194.548 61.356 194.212 61.54C193.884 61.716 193.62 61.988 193.42 62.356C193.22 62.724 193.12 63.172 193.12 63.7C193.12 64.236 193.216 64.688 193.408 65.056C193.608 65.424 193.872 65.7 194.2 65.884C194.528 66.06 194.888 66.148 195.28 66.148ZM202.416 67.108C201.912 67.108 201.46 67.024 201.06 66.856C200.66 66.68 200.344 66.44 200.112 66.136C199.88 65.824 199.752 65.468 199.728 65.068H200.856C200.888 65.396 201.04 65.664 201.312 65.872C201.592 66.08 201.956 66.184 202.404 66.184C202.82 66.184 203.148 66.092 203.388 65.908C203.628 65.724 203.748 65.492 203.748 65.212C203.748 64.924 203.62 64.712 203.364 64.576C203.108 64.432 202.712 64.292 202.176 64.156C201.688 64.028 201.288 63.9 200.976 63.772C200.672 63.636 200.408 63.44 200.184 63.184C199.968 62.92 199.86 62.576 199.86 62.152C199.86 61.816 199.96 61.508 200.16 61.228C200.36 60.948 200.644 60.728 201.012 60.568C201.38 60.4 201.8 60.316 202.272 60.316C203 60.316 203.588 60.5 204.036 60.868C204.484 61.236 204.724 61.74 204.756 62.38H203.664C203.64 62.036 203.5 61.76 203.244 61.552C202.996 61.344 202.66 61.24 202.236 61.24C201.844 61.24 201.532 61.324 201.3 61.492C201.068 61.66 200.952 61.88 200.952 62.152C200.952 62.368 201.02 62.548 201.156 62.692C201.3 62.828 201.476 62.94 201.684 63.028C201.9 63.108 202.196 63.2 202.572 63.304C203.044 63.432 203.428 63.56 203.724 63.688C204.02 63.808 204.272 63.992 204.48 64.24C204.696 64.488 204.808 64.812 204.816 65.212C204.816 65.572 204.716 65.896 204.516 66.184C204.316 66.472 204.032 66.7 203.664 66.868C203.304 67.028 202.888 67.108 202.416 67.108Z" fill="#A0AEC0"/><rect x="30" y="6" width="42.4264" height="42.4264" rx="2" transform="rotate(45 30 6)" fill="#7F9CF5"/><rect x="7.96289" y="43.9668" width="42.4331" height="6.36982" transform="rotate(-45 7.96289 43.9668)" fill="white"/><rect x="20.6465" y="56.7627" width="22.5088" height="6.36982" transform="rotate(-45 20.6465 56.7627)" fill="white"/><rect x="31.5762" y="28.2939" width="25.6285" height="6.36982" transform="rotate(45 31.5762 28.2939)" fill="white"/><rect x="18.8359" y="39.4414" width="15.7701" height="6.36982" transform="rotate(45 18.8359 39.4414)" fill="white"/></svg></a>
        
    </span>
    </div>
    <ul class="flex items-center">
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500 " href="{{route('users')}}">Usuarios</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500 " href="{{route('licitaciones')}}">Licitaciones</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500 {{ Request::is('cargar') ? 'text-blue-500  ' : ''}}"  href="{{route('importV')}}">Cargar</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500"  href="{{route('logout')}}">logout</a>
      </li>
    </ul>
  </nav>

<br>
<br>

        <div class="max-w-sm mx-auto rounded-md border-none bg-grey-200 ">
          <div class="flex items-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-700 mr-4">Cargar Archivo</h2>
        </div>
          <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <input type="file" class="text-sm text-gray-500 rounded-lg my-6 cursor-pointer file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-blue-500 file:font-bold file:text-white file:cursor-pointer" id="archivo" name="file" accept=".csv" required>
              </div>
              <button type="submit" class="w-full h-10 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold ">Subir Archivo</button>
          </form>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if(session('status'))
      <script>
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Archivo cargado exitosamente!",
        showConfirmButton: false,
        timer: 1500
        });
      </script>
    @endif

    @if($errors->first('file'))
      <script>
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Tipo de archivo no soportado, recuerda que el formato es CSV",
          
        });
      </script>
    @endif




</body>
</html>