const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const webpack = require('webpack');

var configDev = {
    entry: {
        app: [
          './resources/js/app.js',
          './resources/scss/app.scss'
        ]
    },
    output: {
      filename: 'js/[name].[hash].js',
      path: path.resolve('public','assets')
    },
    module: {
      rules: [
          {
              test: /\.s[ac]ss$/,
              use: [
                  MiniCssExtractPlugin.loader,
                  'css-loader',
                  'sass-loader',
              ]
          },
          {
              test: /\.(png|svg|jpg|gif)$/,
              loaders: [
                  {
                      loader: 'file-loader',
                      options: {
                          name: '/assets/img/[name].[hash].[ext]'
                      }
                  },
                  {
                      loader: 'img-loader',
                      options: {
                        plugins: [
                          require('imagemin-mozjpeg')({
                            quality: 60,
                            progressive: true,
                            arithmetic: false
                          }),
                          require('imagemin-pngquant')({
                            speed: 2
                          })
                        ]
                      }
                  }
              ]
          },
      ],
      },
      plugins: [
          new MiniCssExtractPlugin({
              filename: 'css/[name].[hash].css',
              chunkFilename: '[id].css',
          }),
      ],
      optimization: {
          minimize: true
      },
      performance: {
          hints: false
      }
};

var configProd = {
    entry: {
        app: [
          './resources/js/app.js',
          './resources/scss/app.scss'
        ]
    },
    output: {
      filename: 'js/[name].js',
      path: path.resolve('public','assets')
    },
    module: {
      rules: [
          {
              test: /\.s[ac]ss$/,
              use: [
                  MiniCssExtractPlugin.loader,
                  'css-loader',
                  'sass-loader',
              ]
          },
          {
              test: /\.(png|svg|jpg|gif)$/,
              loaders: [
                  {
                      loader: 'file-loader',
                      options: {
                          name: '/assets/img/[name].[ext]'
                      }
                  },
                  {
                      loader: 'img-loader',
                      options: {
                        plugins: [
                          require('imagemin-mozjpeg')({
                            quality: 60,
                            progressive: true,
                            arithmetic: false
                          }),
                          require('imagemin-pngquant')({
                            speed: 2
                          })
                        ]
                      }
                  }
              ]
          },
      ],
      },
      plugins: [
          new MiniCssExtractPlugin({
              filename: 'css/[name].css',
              chunkFilename: '[id].css',
          }),
      ],
      optimization: {
          minimize: true
      },
      performance: {
          hints: false,
          maxEntrypointSize: 512000,
          maxAssetSize: 512000
      }
}

module.exports = (env, argv) => {
    if(argv.mode === 'development'){
        return configDev;
    }
    return configProd;
};
